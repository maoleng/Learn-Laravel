<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::query()->get();
        return view('student.index', [
            'students' => $students
        ]);
    }

    public function create() {
        return view('student.create');
    }

    public function store(Request $request) {
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->save();
    }
}
