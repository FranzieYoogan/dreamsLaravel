<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/normal', function () {
    return view('normal');
});

Route::get('/nightmare', function () {
    return view('nightmare');
});

Route::get('/lucid', function () {
    return view('lucid');
});

Route::get('/daydream', function () {
    return view('daydream');
});

Route::get('/recurringdream', function () {
    return view('recurringdream');
});

Route::get('/nightterrors', function () {
    return view('nightterrors');
});

Route::get('/dreams', function () {
    return view('dreams');
});

Route::get('/about', function () {
    return view('about');
});



Route::post('/normal', [Controller::class, 'normal']);
Route::post('/nightmare', [Controller::class, 'nightmare']);
Route::post('/lucid', [Controller::class, 'lucid']);
Route::post('/daydream', [Controller::class, 'daydream']);
Route::post('/recurringdream', [Controller::class, 'recurringdream']);
Route::post('/nightterrors', [Controller::class, 'nightterrors']);
Route::get('/dreams', [Controller::class, 'dreams']);
Route::post('/dreams', [Controller::class, 'delete']);
Route::post('/about', [Controller::class, 'about']);