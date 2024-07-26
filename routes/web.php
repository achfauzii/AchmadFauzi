<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('Auth.login');
});

Route::get('/register', function () {
    return view('Auth.register');
});


Route::get('dataArray', function () {
    $programs = ['php', 'java', 'c', 'javascript', 'dart'];
    return view('dataArray',['programs' => $programs]);
});

Route::get('zoomSesi2', function () {
    return view('zoomSesi2');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/table', function () {
    $data = ['meja','kursi','monitor','pensil','pulpen'];
    return view('table',['data'=>$data]);
});

//Implementasi middleware pada route
//Route dengan middleware hanya dengan role admin yang dapat mengakses
Route::resource('siswa', SiswaController::class)->middleware(['auth','admin']);
Route::resource('user', UserController::class)->middleware(['auth','admin']);


Route::resource('posts', PostsController::class);
Route::resource('comment', CommentController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
