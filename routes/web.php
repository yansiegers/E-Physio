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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/over', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/veel-gestelde-vragen', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

// ===============================================================

Route::get('/dashboard', function () {
    return view('portal.dashboard');
})->name('dashboard');
