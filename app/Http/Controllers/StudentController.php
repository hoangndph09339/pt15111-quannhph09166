<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();

        return view('students.detail', [
            'students' => $students
        ]);
    }

    public function createStudent()
    {
        return view('students.form');
    }
}