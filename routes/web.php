<?php

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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('employees', App\Http\Controllers\EmployeesController::class);
Route::resource('salaries', App\Http\Controllers\SalariesController::class);
Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Route::resource('banks', App\Http\Controllers\BankController::class);
Route::resource('documentations', App\Http\Controllers\DocumentationController::class);
Route::resource('payrolls', App\Http\Controllers\PayrollController::class);
Route::resource('allowances', App\Http\Controllers\AllowanceController::class);
Route::resource('attendances', App\Http\Controllers\AttendanceController::class);
Route::resource('employeerecords', App\Http\Controllers\EmployeerecordController::class);
Route::resource('promotions', App\Http\Controllers\PromotionController::class);
Route::resource('leaves', App\Http\Controllers\LeaveController::class);
Route::resource('leavetypes', App\Http\Controllers\LeavetypeController::class);
Route::resource('deductions', App\Http\Controllers\DeductionController::class);
