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

// ---------- Session & Cookie ----------
Route::get('/show', 'SolveController@index');
Route::post('/calculate', 'SolveController@calculate');
Route::get('/solve', function() {
	return view("solve");
});
// -------- end Session & Cookie --------