<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/students/create',[StudentController::class,'create'])->name('student.create');
Route::post('/students/store',[StudentController::class,'store'])->name('student.store');
Route::post('/students/store',[StudentController::class,'store'])->name('student.store');
Route::get('/students/index',[StudentController::class,'index'])->name('student.index');