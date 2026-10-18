@extends('layouts.app')
@section('title', 'Edit Student')
@section('page', 'students-edit')
@section('studentId', request()->route('id'))
@section('content')
<div class="form-page"><div class="page-header centered"><div><p class="eyebrow">UPDATE RECORD</p><h1>Edit Student</h1><p>Update the student information below.</p></div></div>
<div id="studentNotice" class="notice" role="status" hidden></div>
<section class="glass-card form-card"><form id="studentForm" novalidate>@include('students._form')
<div class="form-actions"><button type="submit">Save Changes</button><a id="cancelEditLink" href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a></div></form></section></div>
@endsection
