<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[StudentController::class,'index'])->name('student.index');
Route::get("/student",[StudentController::class,'create'])->name('student.create');
Route::post("/student/save",[StudentController::class,'store'])->name('student.store');
Route::get("/student/{id}",[StudentController::class,'show'])->name('student.show');
Route::get("/student/{id}/edit",[StudentController::class,'edit'])->name('student.edit');
Route::put("/student/{id}",[StudentController::class,'update'])->name('student.update');