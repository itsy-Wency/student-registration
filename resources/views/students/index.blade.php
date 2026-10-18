@extends('layouts.app')
@section('title', 'Students')
@section('page', 'students-index')
@section('content')
<div class="page-header"><div><p class="eyebrow">STUDENT MANAGEMENT</p><h1>Student Records</h1><p>View, edit, or remove registered students.</p></div><a class="btn" href="{{ route('students.create') }}">+ Register Student</a></div>
<div id="studentNotice" class="notice" role="status" hidden></div>
<section class="glass-card table-card"><div class="section-heading"><h2>Registered Students</h2><button type="button" class="btn btn-secondary" id="refreshStudents">Refresh</button></div>
<div class="table-responsive"><table><thead><tr><th>Student ID</th><th>Name</th><th>Email</th><th>Course</th><th>Year</th><th>Actions</th></tr></thead>
<tbody id="studentTableBody"><tr><td colspan="6" class="empty-state">Loading student records...</td></tr></tbody></table></div></section>
@endsection
