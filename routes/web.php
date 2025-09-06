<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

Route::get('/noticia', function () {
    return view('site/noticia-aberta');
});

//routes noticias
Route::get('/noticias/{id?}', [NewsController::class, 'index'])->name('site.noticia-aberta');
Route::get('/criar-noticias', [NewsController::class, 'create'])->name('news.create');
Route::post('/noticias', [NewsController::class, 'store'])->name('news.store');
