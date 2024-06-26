<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/loginStudent', [PageController::class, 'loginStudent']);
Route::post('/loginStudent', [DataController::class, 'loginStudentPost']);

Route::get('/StudentRegister', [PageController::class, 'StudentRegister']);
Route::post('/StudentRegister', [DataController::class, 'StudentregisterPost']);

Route::get('/loginTeacher', [PageController::class, 'loginTeacher']);

Route::post('/loginTeacher', [DataController::class, 'loginTeacherPost']);

Route::get('/TeacherRegister', [PageController::class, 'TeacherRegister']);
Route::post('/TeacherRegister', [DataController::class, 'TeacherRegisterPost']);

Route::get('/loginParents', [PageController::class, 'loginParents']);

Route::get('/admin', [PageController::class, 'admin']);

Route::get('/StudentDashboard', [PageController::class, 'StudentDashboard']);

Route::get('/teacherdashboard', [PageController::class, 'teacherdashboard']);

Route::get('/teacherdashboard', [PageController::class, 'teacherdashboard']);
