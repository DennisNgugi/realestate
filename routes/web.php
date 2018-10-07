<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/rentals', function () {
    return view('preview_rentals');
});
Route::get('/','PropertyController@home')->name('home');
Route::get('/preview_property/{{id}}','PropertyController@show')->name('preview');
Route::resource('property_type','PropertyTypeController');
Route::resource('property_purpose','PropertyPurposeController');
Route::resource('location','LocationController');
Route::resource('properties','PropertyController');
