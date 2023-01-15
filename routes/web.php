<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DocumentController;

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
Route::get('/d',function()
{
    return view('d');
}
);

Route::get('/',[EmployeeController::class,'index']);
// Department Resource
Route::get('depart/{id}/delete',[DepartmentController::class,'destroy']);
Route::resource('depart',DepartmentController::class);

// Employee Resource
 Route::get('employee/{id}/delete',[EmployeeController::class,'destroy']);
 Route::resource('employee',EmployeeController::class);


// Document Resource
 Route::get('document/{id}/delete',[DocumentController::class,'destroy']);
 Route::resource('document',DocumentController::class);

