<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home', [
        "tittle" => "Home",
        "name" => "Alsa",
        "email" => "anisab464@gmail.com"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Alsa",
        "email" => "anisab464@gmail.com"
    ]);
});
?>