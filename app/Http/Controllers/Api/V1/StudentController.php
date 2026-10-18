<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // GET: Display all students
    public function index()
    {
        return response()->json(
            Student::all(),
            200
        );
    }

    // POST: Create a student
    public function store(Request $request)
    {
        $data = $request->validate([
            'student_id' => 'required|string|max:30|unique:students,student_id',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email',
            'course' => 'required|string|max:100',
            'year_level' => 'required|integer|min:1|max:6',
        ]);

        $student = Student::create($data);

        return response()->json($student, 201);
    }

    // GET: Display one student
    public function show(Student $student)
    {
        return response()->json($student, 200);
    }

    // PUT/PATCH: Update a student
    public function update(
        Request $request,
        Student $student
    ) {
        $data = $request->validate([
            'student_id' => 'sometimes|required|string|max:30|unique:students,student_id,'.$student->id,
            'first_name' => 'sometimes|required|string|max:100',
            'last_name' => 'sometimes|required|string|max:100',
            'email' => 'sometimes|required|email|unique:students,email,'.$student->id,
            'course' => 'sometimes|required|string|max:100',
            'year_level' => 'sometimes|required|integer|min:1|max:6',
        ]);

        $student->update($data);

        return response()->json($student, 200);
    }

    // DELETE: Remove a student
    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully.',
        ], 200);
    }
}
