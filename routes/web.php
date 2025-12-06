<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/' , [HomeController::class , 'home'])->name('home');



Route::get('student/register', [StudentController::class, 'create']);
Route::get('student/login', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store'])->name('student.store');
Route::post('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');




// AJAX route for subcategories
Route::get('/get-subcategories/{category_id}', [StudentController::class, 'getSubCategories']);