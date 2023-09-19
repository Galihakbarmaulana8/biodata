<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertadidikR;
use App\Http\Controllers\guruR;
use App\Http\Controllers\userC;


Route::get('pesertadidik/pdf', [PesertadidikR::class, 'pdf'])->middleware('auth');
Route::resource('pesertadidik', PesertadidikR::class)->middleware('auth');
Route::resource('guru', guruR::class);
//Route::get('pdf', [pesertadidikPDF::class, 'pdf']);


Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/table', function () {
    return view('table');
});

Route::get('register', [userC::class, 'register'])->name('register');
Route::get('login', [userC::class, 'login'])->name('login');
Route::get('logout', [userC::class, 'logout'])->name('logout');

Route::post('register', [userC::class, 'register_action'])->name('register.action');
Route::post('login', [userC::class, 'login_action'])->name('login.action');

