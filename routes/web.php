
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

use Carbon\Carbon;
Route::get('/test',function(){
  $now = new Carbon();
  dd($now);
});

Route::get('/','PropertyController@home')->name('home'); //home s1
//Route::get('/images','PropertyImageController@create')->name('images');
Route::get('/property/{id}','PropertyController@show')->name('preview');
Route::post('/property/{id}','PropertyController@inquiry')->name('inquiries');
Route::get('/services/{id}','ServiceController@show')->name('service');
Route::get('/details/{id}','PropertyDetailController@download')->name('details');
Route::get('/print/{id}','PropertyDetailController@print')->name('print');
//Route::get('/details/','PropertyDetailController@show')->name('details');
/*Route::get('/login', function () {
    return view('login');
});*/
Route::get('/login', 'MainController@index');
Route::post('/login/checklogin', 'MainController@checklogin');
Route::get('/logout', 'MainController@logout');
//Route::get('/','ServiceController@service')->name('service');
Route::get('/all_properties','PropertyController@allproperty');
Route::get('/contact','PropertyController@contact');
Route::get('/about','PropertyController@about');
Route::get('/property_list/{id}','PropertyController@showProperty')->name('list');
Route::resource('property_type','PropertyTypeController');
Route::resource('property_purpose','PropertyPurposeController');
Route::resource('location','LocationController');
Route::resource('properties','PropertyController');
Route::post('book/{id}','PropertyController@book')->name('book');
Route::resource('category','DownloadCategoryController');
Route::resource('image','PropertyImageController');
Route::resource('add_services','ServiceController');
Route::resource('downloads','DownloadController');
Route::get('/download','DownloadController@display')->name('display');
Route::get('/download/{filename}','DownloadController@download')->name('download');
Route::get('/property_inquiries','PropertyController@inqex');
Route::get('/featured','PropertyController@featured');
Route::get('/issued','PropertyController@issued');
Route::delete('/property_inquiries/{id}','PropertyController@del');
Route::post('/issue/{id}/{p_id}','PropertyController@issue');
Route::post('/unissue/{id}/{p_id}','PropertyController@unissue');
