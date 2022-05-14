<?php

use Illuminate\Support\Facades\Route;

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
    return view('beranda');
});

Route::get('/izinpenelitian', function () {
    return view('users/form_izin_penelitian');
});

Route::get('/izinpengabdian', function () {
    return view('users/form_izin_pengabdian');
});

Route::get('/tugaspenelitian', function () {
    return view('users/form_tugas_penelitian');
});

Route::get('/tugaspengabdian', function () {
    return view('users/form_tugas_pengabdian');
});