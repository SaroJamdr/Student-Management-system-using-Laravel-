<?php

use App\Http\Controllers\Frontend\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sample2\HomeController;
use App\Http\Controllers\Student\Studentcontroller;

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
Route::get('/home',[HomeController::class,'home']);
Route::get('/about',[HomeController::class,'about']);



Route::get('/addstudent',[Studentcontroller::class,'index'])->name('add.student');
Route::get('/',[Studentcontroller::class,'list'])->name('list.student');

Route::post('/student/store',[StudentController::class,'store'])->name('std.store');

 Route::patch('/student/update/{student}',[Studentcontroller::class,'update'])->name('std.update');
Route::get('/student/delete/{student}',[Studentcontroller::class,'delete'])->name('std.delete');


Route::get('/students',[FrontController::class,'index'])->name('view.student');
Route::get('/student/details/{student}',[FrontController::class,'details'])->name('std.details');


