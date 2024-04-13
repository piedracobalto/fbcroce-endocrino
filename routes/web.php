<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.main');
})->name("home");

Route::get('/acerca', function (){
    return view("acerca.acerca");
})->name('acerca');

Route::get('/contacto', function (){
    return view("contacto.contacto");
})->name('contacto');

Route::get('/servicios', function (){
    return view("servicios.servicios");
})->name('servicios');
