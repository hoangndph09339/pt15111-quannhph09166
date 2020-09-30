<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Student;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // Xu ly login, truy van
        $student = Student::where(
            'name',
            'like',
            "%$request->username%"
        )->first();

        if ($student) {
            return redirect()->route('listStudent');
        }

        return redirect()->route('getLogin');
    }
}
