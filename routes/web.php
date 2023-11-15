<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use Illuminate\Session\SessionServiceProvider;
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
    return view('landing-page');
});

Route::get('/login', [SessionController::class, 'index']) -> middleware('isGuard');
Route::post('/login', [SessionController::class, 'login']) -> middleware('isGuard');
Route::get('/logout', [SessionController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']) -> middleware('isLogin');

Route::resource('/student', StudentController::class);
// Route::controller(StudentController::class)->group(function() {
//     // Views
//     Route::get('/student', 'index');
//     Route::get('/student/create', 'create');
//     Route::get('/student/edit', 'edit');

//     // Process
//     Route::post('/student', 'store');
//     Route::patch('/student/edit', 'update');
//     Route::delete('/student', 'delete');
// });