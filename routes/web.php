<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard_admin', function () {
    return view('dashboard_admin');
});

Route::get('/MPengguna_admin', function () {
    return view('MPengguna_admin');   
});

Route::get('/Mkegiatan_admin', function () {
    return view('MKegiatan_admin');  
});

Route::get('/MAbsensi_admin', function () {
    return view('MAbsensi_admin');  
});

Route::get('/MKas_admin', function () {
    return view('MKas_admin');  
});