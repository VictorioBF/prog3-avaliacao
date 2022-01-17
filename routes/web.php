<?php

use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

//galeria, página principal
Route::get('/',[ImagesController::class, 'index'])->name('images.index');

//página de imagem
Route::get('/show/{img}', [ImagesController::class, 'show'])->name('images.show');

//formulário
Route::get('/new', [ImagesController::class, 'create'])->name('images.create');

//inserir no BD
Route::post('/new', [ImagesController::class, 'insert'])->name('images.insert');
