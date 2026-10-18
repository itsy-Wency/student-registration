@extends('layouts.app')
@section('title', 'Register Student')
@section('page', 'students-create')
@section('content')
<div class="form-page"><div class="page-header centered"><div><p class="eyebrow">NEW RECORD</p><h1>Register Student</h1><p>Enter the student's information below.</p></div></div>
<div id="studentNotice" class="notice" role="status" hidden></div>
<section class="glass-card form-card"><form id="studentForm" novalidate>@include('students._form')
<div class="form-actions"><button type="submit">Register Student</button><a href="{{ '/students' }}" class="btn btn-secondary">
    View Students
</a></div></form></section></div>
@endsection

