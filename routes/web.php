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

// Route::get('/', function () {
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// ========= General Pages ======================================================

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

Route::get('/algemene-voorwaarden', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/privacybeleid', function () {
    return view('pages.privacy');
})->name('privacy');

// ========= Portal ======================================================

// Route::get('/dashboard', function () {
//     return view('portal.dashboard');
// })->name('dashboard');

Route::get('/kalender', function () {
    return view('portal.calendar');
})->name('calendar');

Route::get('/oefeningen', function () {
    return view('portal.exercises');
})->name('exercises');

Route::get('/account', function () {
    return view('portal.account');
})->name('account');

// ========= Testing ======================================================

Route::get('/design-kit', function () {
    return view('design-kit');
})->name('design-kit');
