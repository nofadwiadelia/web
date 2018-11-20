<?php


Route::get('/', function () {
    return view('index');
});


Route::resource('fashion','fashion');
Route::resource('food','food');
Route::resource('pemesanan','pemesanan');
Route::resource('cart','cart');