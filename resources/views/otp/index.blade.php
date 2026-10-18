@extends('layouts.app')
@section('title', 'Email OTP')
@section('page', 'otp-index')
@section('content')
<div class="form-page otp-page"><div class="page-header centered"><div><p class="eyebrow">EMAIL SECURITY</p><h1>Email OTP Verification</h1><p>Request a code and enter it before it expires.</p></div></div>
<div id="notice" class="notice" role="status" hidden></div>
<section class="glass-card form-card"><form id="sendOtpForm"><h2>1. Request a code</h2><div class="form-group"><label for="otpEmail">Email Address</label><input id="otpEmail" name="email" type="email" required></div><button type="submit">Send OTP</button></form></section>
<section class="glass-card form-card"><form id="verifyOtpForm"><h2>2. Verify your email</h2><div class="form-group"><label for="verifyEmail">Email Address</label><input id="verifyEmail" name="email" type="email" required></div><div class="form-group"><label for="otp">Six-digit OTP</label><input id="otp" name="otp" inputmode="numeric" pattern="[0-9]{6}" minlength="6" maxlength="6" required></div><button type="submit">Verify OTP</button></form></section></div>
@endsection
