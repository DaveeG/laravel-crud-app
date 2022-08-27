<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('studentlist',[StudentController::class,'index']);

Route::get('addstudent',[StudentController::class,'addStudent']);

Route::post('savestudent',[StudentController::class,'saveStudent']);

Route::get('editstudent/{id}',[StudentController::class,'editStudent']);

Route::post('updatestudent',[StudentController::class,'updateStudent']);

Route::get('deletestudent/{id}',[StudentController::class,'deleteStudent']);
