<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/calculated', function () {
    return view('calculated');
});

Route::get('/solve', function () {
    return view('solve');
});