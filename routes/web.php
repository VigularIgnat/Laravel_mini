<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
})->name('home');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact/all', 'App\Http\Controllers\ContactController@takeData')->name('contact-data');
Route::get('/contact/query', 'App\Http\Controllers\ContactController@takeReqdata')->name('contact-query');
Route::get(
    '/contact/all/{id}', 
    'App\Http\Controllers\ContactController@showOneMessage'
)->name('contact-data-one');
Route::get(
    '/contact/all/{id}/update', 
    'App\Http\Controllers\ContactController@updateMessage'
)->name('contact-update');

Route::post(
    '/contact/all/{id}/update', 
    'App\Http\Controllers\ContactController@updateMessageSubmit'
)->name('contact-update-submit');

Route::get(
    '/contact/all/{id}/delete', 
    'App\Http\Controllers\ContactController@deleteMessage'
)->name('contact-delete');


//Route::post('/contact/submit', 'ContactController@submit')->name('contact-submit');
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-submit');

//Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-submit');
//Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-submit');


