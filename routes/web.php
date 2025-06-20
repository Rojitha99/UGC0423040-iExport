<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cinnamon', function () {
    return view('cinnamon');
})->name('cinnamon');

Route::get('/pepper', function () {
    return view('pepper');
})->name('pepper');

Route::get('/cardamom', function () {
    return view('cardamom');
})->name('cardamom');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/buyers', function () {
    return view('buyers');
})->name('buyers');

Route::get('/car01', function () {
    return view('car01');
})->name('car01');

Route::get('/cin01', function () {
    return view('cin01');
})->name('cin01');

Route::get('/clo01', function () {
    return view('clo01');
})->name('clo01');

Route::get('/cloves', function () {
    return view('cloves');
})->name('cloves');

Route::get('/invest_car', function () {
    return view('invest_car');
})->name('invest_car');

Route::get('/invest_nut', function () {
    return view('invest_nut');
})->name('invest_nut');

Route::get('/invest_pep', function () {
    return view('invest_pep');
})->name('invest_pep');

Route::get('/invest', function () {
    return view('invest');
})->name('invest');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logistic', function () {
    return view('logistic');
})->name('logistic');

Route::get('/nut01', function () {
    return view('nut01');
})->name('nut01');

Route::get('/nutmeg', function () {
    return view('nutmeg');
})->name('nutmeg');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/sellers', function () {
    return view('sellers');
})->name('sellers');

Route::get('/invest_cin', function () {
    return view('invest_cin');
})->name('invest_cin');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');


Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/sitemap', function () {
    return view('sitemap');
})->name('sitemap');