@extends('layouts.app')
@section('title', 'Student Details')
@section('page', 'students-show')
@section('studentId', request()->route('id'))
@section('content')
<div class="page-header"><div><p class="eyebrow">STUDENT PROFILE</p><h1>Student Details</h1></div><div class="page-actions"><a id="editStudentLink" class="btn" href="{{ route('students.index') }}">Edit Student</a><a class="btn btn-secondary" href="{{ route('students.index') }}">Back to Students</a></div></div>
<div id="studentNotice" class="notice" role="status" hidden></div>
<section class="glass-card detail-card"><div id="studentDetails" class="details-grid"><p class="empty-state">Loading student details...</p></div><div class="form-actions"><button type="button" class="btn btn-danger" id="deleteStudentButton">Delete Student</button></div></section>
@endsection
