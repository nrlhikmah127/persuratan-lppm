<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'beranda']);
Route::get('/beranda_admin', [PagesController::class, 'beranda_admin'])->middleware('auth');
Route::get('/hlmnlogin', [PagesController::class, 'login']);
Route::get('/form_izinpenelitian', [PagesController::class, 'form_izin_penelitian']);
Route::get('/form_izinpengabdian', [PagesController::class, 'form_izin_pengabdian']);
Route::get('/form_tugaspenelitian', [PagesController::class, 'form_tugas_penelitian']);
Route::get('/form_tugaspengabdian', [PagesController::class, 'form_tugas_pengabdian']);
Route::post('/izinpenelitian', [PagesController::class, 'store_permohonan']);
Route::post('/izinpengabdian', [PagesController::class, 'store_permohonan']);
Route::post('/tugaspenelitian', [PagesController::class, 'store_tugas']);
Route::post('/tugaspengabdian', [PagesController::class, 'store_tugas']);
//Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/ganti_password', [LoginController::class, 'gantiPassword']);
Route::post('/ganti_password', [LoginController::class, 'updatePassword']);

Route::get('/req_izinpenelitian', [PagesController::class, 'req_izin_penelitian'])->middleware('auth');
Route::get('/proses_izinpenelitian/{permohonan}', [PagesController::class, 'proses_izin_penelitian'])->middleware('auth');
Route::get('/edit_izinpenelitian/{permohonan}', [PagesController::class, 'edit_izin_penelitian'])->middleware('auth');
Route::post('/update_izinpenelitian/{permohonan}', [PagesController::class, 'update_izin_penelitian'])->middleware('auth');

Route::get('/req_izinpengabdian', [PagesController::class, 'req_izin_pengabdian'])->middleware('auth');
Route::get('/proses_izinpengabdian/{permohonan}', [PagesController::class, 'proses_izin_pengabdian'])->middleware('auth');
Route::get('/edit_izinpengabdian/{permohonan}', [PagesController::class, 'edit_izin_pengabdian'])->middleware('auth');
Route::post('/update_izinpengabdian/{permohonan}', [PagesController::class, 'update_izin_pengabdian'])->middleware('auth');

Route::get('/req_tugaspenelitian', [PagesController::class, 'req_tugas_penelitian'])->middleware('auth');
Route::get('/proses_tugaspenelitian/{tugas}', [PagesController::class, 'proses_tugas_penelitian'])->middleware('auth');;
Route::get('/edit_tugaspenelitian/{tugas}', [PagesController::class, 'edit_tugas_penelitian'])->middleware('auth');
Route::post('/update_tugaspenelitian/{tugas}', [PagesController::class, 'update_tugas_penelitian'])->middleware('auth');

Route::get('/req_tugaspengabdian', [PagesController::class, 'req_tugas_pengabdian'])->middleware('auth');
Route::get('/proses_tugaspengabdian/{tugas}', [PagesController::class, 'proses_tugas_pengabdian'])->middleware('auth');
Route::get('/edit_tugaspengabdian/{tugas}', [PagesController::class, 'edit_tugas_pengabdian'])->middleware('auth');
Route::post('/update_tugaspengabdian/{tugas}', [PagesController::class, 'update_tugas_pengabdian'])->middleware('auth');