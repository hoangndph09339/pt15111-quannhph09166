<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('getLogin');
    Route::post('/post-login', [AuthController::class, 'postLogin'])->name('postLogin');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function() {
        return 'DashBoard';
    });

    Route::prefix('students')->group(function () {
        Route::get('/', [StudentController::class, 'show'])->name('listStudent');
    });
});

Route::get('/theme', function() {
    return view('admin.dashboard.index');
});
