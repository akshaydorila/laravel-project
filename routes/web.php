<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('form');
});


Route::post('/submit', function (Request $request) {

    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);

   
    return redirect('/result')->with('data', $request->all());
});


Route::get('/result', function () {
    $data = 'Testing Data';
    return view('result', compact('data'));
}); 