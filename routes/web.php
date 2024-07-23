<?php

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

Route::get('dataArray', function () {
    $programs = ['php', 'java', 'c', 'javascript', 'dart'];
    return view('dataArray',['programs' => $programs]);
});

Route::get('zoomSesi2', function () {
    return view('zoomSesi2');
});
Route::get('/', function () {
    return view('template');
});

Route::get('/table', function () {
    $data = ['meja','kursi','monitor','pensil','pulpen'];
    return view('table',['data'=>$data]);
});