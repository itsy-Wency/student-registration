<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Student Registration')</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body data-page="@yield('page', '')" data-student-id="@yield('studentId', '')">
<div class="aurora-background" aria-hidden="true"><div class="aurora-orb aurora-orb--red"></div><div class="aurora-orb aurora-orb--crimson"></div><div class="aurora-orb aurora-orb--white"></div></div>

<nav class="navbar">
    <div class="nav-inner">
        <a href="{{ route('students.create') }}" class="navbar-brand">
            Student Registration
        </a>

        <div class="nav-links">
            <a href="{{ '/students' }}">Students</a>
            <a href="{{ route('students.create') }}">Register Student</a>
            <a href="{{ route('otp.index') }}">Email OTP</a>
        </div>
    </div>
</nav>

<main class="container">@yield('content')</main>
</body></html>

