2<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

// Tim
Route::get('/tim-kami', function () {
    return view('tim-kami');
})->name('tim');

// Layanan
Route::get('/internet-dedicated', function () {
    return view('internet-dedicated');
})->name('internet.dedicated');

Route::get('/internet-broadband', function () {
    return view('internet-broadband');
})->name('internet.broadband');

Route::get('/managed-network', function () {
    return view('managed-network');
})->name('managed.network');

Route::get('/support-maintenance', function () {
    return view('support-maintenance');
})->name('support.maintenance');

// Informasi
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/kebijakan-privasi', function () {
    return view('kebijakan-privasi');
})->name('privacy');

Route::get('/syarat-ketentuan', function () {
    return view('syarat-ketentuan');
})->name('terms');

Route::get('/testimoni', function () {
    return view('testimoni');
})->name('testimoni');
