<?php

use App\Models\Artikels;
use App\Models\Eskuls;
use App\Models\Fasilitass;
use App\Models\Industris;
use App\Models\Jurusans;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tampil_eskul', function () {
    $eskuls= Eskuls::all();
    return view('tampil_eskul', compact('eskuls'));
});

Route::get('/tampil_jurusan', function () {
    $jurusans= Jurusans::all();
    return view('tampil_jurusan', compact('jurusans'));
});

Route::get('/tampil_fasilitas', function () {
    $fasilitass= Fasilitass::all();
    return view('tampil_fasilitas', compact('fasilitass'));
});

Route::get('/tampil_industri', function () {
    $industris= Industris::all();
    return view('tampil_industri',compact('industris'));
});

Route::get('/tampil_artikel', function () {
    $artikels = Artikels::all();
    return view('tampil_artikel', compact('artikels'));
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('artikels', App\Http\Controllers\ArtikelsController::class)->middleware('auth');
Route::resource('jurusans', App\Http\Controllers\JurusansController::class)->middleware('auth');
Route::resource('industris', App\Http\Controllers\IndustrisController::class)->middleware('auth');
Route::resource('fasilitass', App\Http\Controllers\FasilitassController::class)->middleware('auth');
Route::resource('eskuls', App\Http\Controllers\EskulsController::class)->middleware('auth');


