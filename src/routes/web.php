<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\AbsensiController;
use \App\Http\Controllers\DosenController;
use \App\Http\Controllers\JadwalController;
use \App\Http\Controllers\KelasController;
use \App\Http\Controllers\MahasiswaController;
use \App\Http\Controllers\MatakuliahController;

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
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class,'index'])
    ->name('mahasiswa.index');
    
Route::get('/mahasiswa/tampil/{id}',[MahasiswaController::class,'tampil'])
    ->name('mahasiswa.tampil');


Route::get('/kelas', [KelasController::class,'index'])
    ->name('kelas.index');
    
Route::get('/kelas/tampil/{id}',[KelasController::class,'tampil'])
    ->name('kelas.tampil');


Route::get('/dosen', [DosenController::class,'index'])
    ->name('dosen.index');

Route::get('/dosen/tampil/{id}',[DosenController::class,'tampil'])
    ->name('dosen.tampil');


Route::get('/matakuliah', [MatakuliahController::class,'index'])
    ->name('matakuliah.index');

Route::get('/matakuliah/tampil/{id}',[MatakuliahController::class,'tampil'])
    ->name('matakuliah.tampil');


Route::get('/jadwal', [JadwalController::class,'index'])
    ->name('jadwal.index');
    
Route::get('/jadwal/tampil/{id}',[JadwalnController::class,'tampil'])
    ->name('jadwal.tampil');


Route::get('/absensi', [AbsensiController::class,'index'])
    ->name('absensi.index');

Route::get('/absensi/tampil/{id}',[AbsensiController::class,'tampil'])
    ->name('absensi.tampil');
