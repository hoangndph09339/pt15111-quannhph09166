<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show()
    {
        $students = DB::table('students')->get();

        return view('admin.students.index', [
            'students' => $students
        ]);
    }

    public function createStudent()
    {
        return view('students.form');
    }
}
