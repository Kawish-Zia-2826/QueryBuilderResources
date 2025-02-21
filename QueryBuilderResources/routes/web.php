<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('students', StudentController::class)->only([
//     'index', 'show'
// ]);
// ->names([
//     'index'=>'students.showData'
// ]
// )
// ;

Route::resource('students.comments',CommentsController::class)->shallow();