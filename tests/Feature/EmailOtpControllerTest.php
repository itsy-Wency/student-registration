<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EmailOtpControllerTest extends TestCase
{
    public function test_it_sends_an_otp_and_verifies_it(): void
    {
        Mail::fake();

        $email = 'student@example.com';

        $sendResponse = $this->postJson('/api/v1/email-otp/send', [
            'email' => strtoupper($email),
        ]);

        $sendResponse->assertOk()->assertJson([
            'message' => 'Verification code sent successfully.',
            'expires_in_minutes' => 5,
        ]);

        $otp = Cache::get('email_otp:'.$email);

        $this->assertIsString($otp);
        $this->assertMatchesRegularExpression('/^[0-9]{6}$/', $otp);

        $this->postJson('/api/v1/email-otp/verify', [
            'email' => $email,
            'otp' => $otp,
        ])->assertOk()->assertJson([
            'message' => 'Email verified successfully.',
        ]);

        $this->assertNull(Cache::get('email_otp:'.$email));
    }

    public function test_it_rejects_an_invalid_otp(): void
    {
        Cache::put('email_otp:student@example.com', '123456', now()->addMinutes(5));

        $this->postJson('/api/v1/email-otp/verify', [
            'email' => 'student@example.com',
            'otp' => '654321',
        ])->assertStatus(422)->assertJson([
            'message' => 'The code is invalid or has expired.',
        ]);
    }

    public function test_it_removes_the_otp_when_email_sending_fails(): void
    {
        Mail::shouldReceive('raw')->once()->andThrow(new \RuntimeException('Mail server unavailable'));

        $this->postJson('/api/v1/email-otp/send', [
            'email' => 'student@example.com',
        ])->assertStatus(500)->assertJson([
            'message' => 'Unable to send the verification email. Please try again.',
        ]);

        $this->assertNull(Cache::get('email_otp:student@example.com'));
    }
}
