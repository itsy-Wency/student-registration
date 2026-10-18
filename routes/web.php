
<?php

use Illuminate\Support\Facades\Route;


Route::redirect('/', '/students/create');


Route::view('/students', 'students.index')
    ->name('students.index');

Route::view('/students/create', 'students.create')
    ->name('students.create');

Route::view('/students/{id}/edit', 'students.edit')
    ->whereNumber('id')
    ->name('students.edit');

Route::view('/students/{id}', 'students.show')
    ->whereNumber('id')
    ->name('students.show');

Route::view('/email-otp', 'otp.index')
    ->name('otp.index');
