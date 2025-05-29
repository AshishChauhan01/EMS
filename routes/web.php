<?php

use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home.home');
});



Route::prefix('login')->group(function () {
    Route::get('employee', function () {
        return view('login.employee');
    })->name('employeeLogin');
    Route::get('admin', function () {
        return view('login.admin');
    })->name('adminLogin');
});

Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.dashboard');
    Route::view('department', 'admin.department.index');
    Route::view('add-department', 'admin.department.add_department');
});

Route::post('save-department', [FrontEndController::class, 'addDepartment']);
