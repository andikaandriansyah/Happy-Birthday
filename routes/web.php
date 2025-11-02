<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirthdayController;

Route::get('/', [BirthdayController::class, 'envelope'])->name('envelope');
Route::get('/name', [BirthdayController::class, 'name'])->name('name');
Route::post('/name', [BirthdayController::class, 'storeName']);
Route::get('/birth', [BirthdayController::class, 'birth'])->name('birth');
Route::post('/birth', [BirthdayController::class, 'storeBirth']);
Route::get('/dream', [BirthdayController::class, 'dream'])->name('dream');
Route::post('/dream', [BirthdayController::class, 'storeDream']);
Route::get('/intro', [BirthdayController::class, 'intro'])->name('intro');
Route::get('/curhat', [BirthdayController::class, 'curhat'])->name('curhat');
Route::get('/dream-view', [BirthdayController::class, 'dreamView'])->name('dream.view');
Route::get('/gift-box', [BirthdayController::class, 'giftBox'])->name('gift.box');
Route::get('/celebration', [BirthdayController::class, 'celebration'])->name('celebration');
Route::get('/photo-memory', [BirthdayController::class, 'photoMemory'])->name('photo.memory');
Route::get('/wishes', [BirthdayController::class, 'wishes'])->name('wishes');
Route::get('/final', [BirthdayController::class, 'final'])->name('final');