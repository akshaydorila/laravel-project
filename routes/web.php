<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('form');
});

Route::post('/submit', function (Request $request) {
    return view('form', [
        'data' => $request->only(['name', 'email'])
    ]);
});