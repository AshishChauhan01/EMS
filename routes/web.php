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
    Route::get('manage-department', [FrontEndController::class, 'manageDepartment'])->name('manage-department');
    Route::post('save-department', [FrontEndController::class, 'addDepartment']);
    Route::get('view-department/{id}', [FrontEndController::class, 'viewDepartment']);
    Route::put('update-department/{id}', [FrontEndController::class, 'updateDepartment']);
    Route::get('delete-department/{id}', [FrontEndController::class, 'deleteDepartment']);

    Route::get('add-leave', [FrontEndController::class, 'addLeave']);
    Route::post('save-leave', [FrontEndController::class, 'saveLeave']);
    Route::get('manage-leave', [FrontEndController::class, 'manageLeave'])->name('manage-leave');
    Route::get('edit-leave/{id}', [FrontEndController::class, 'editLeave']);
    Route::put('update-leave/{id}', [FrontEndController::class, 'updateLeave']);
    Route::get('delete-leave/{id}', [FrontEndController::class, 'deleteLeave']);
});
