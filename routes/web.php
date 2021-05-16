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

// === Pages ================================

Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('/paarden', function () {
    return view('pages.horses');
})->name('pages.horses');

Route::get('/verzorgen', function () {
    return view('pages.nurturing');
})->name('pages.nurturing');

Route::get('/wedstrijden', function () {
    return view('pages.competitions');
})->name('pages.competitions');

Route::get('/nieuws', function () {
    return view('pages.news');
})->name('pages.news');


Route::get('/over', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('pages.contact');

Route::get('/veel-gestelde-vragen', function () {
    return view('pages.faq');
})->name('pages.faq');

Route::get('/algemene-voorwaarden', function () {
    return view('pages.terms');
})->name('pages.terms');

Route::get('/privacybeleid', function () {
    return view('pages.privacy');
})->name('pages.privacy');
