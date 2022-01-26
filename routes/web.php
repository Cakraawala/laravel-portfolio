<?php

use Illuminate\Support\Facades\Route;

/// PORT FOLIO //
Route::get('/', function () {$name = "Angger Cakra";
    return view('home',
     ['name' => $name]);});

Route::view('contact', 'contact');

Route::get('contoh', function (){$name = "Angger Cakra";
    return view('contoh',
     ['name' => $name]);});
