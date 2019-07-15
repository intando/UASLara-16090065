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

Route::get('/home', function () {
    return view('dashboard');
});

//Route::get('template', function () {
//    return view('template');
//});

//seasons
Route::get('semi', function () {
    return view('seasons.semi');
});

Route::get('panas', function () {
    return view('seasons.panas');
});

Route::get('dingin', function () {
    return view('seasons.dingin');
});

Route::get('gugur', function () {
    return view('seasons.gugur');
});

//events 
Route::get('semi2', function () {
    return view('events.semi2');
});

Route::get('panas2', function () {
    return view('events.panas2');
});

Route::get('dingin2', function () {
    return view('events.dingin2');
});

Route::get('gugur2', function () {
    return view('events.gugur2');
}); 

//korea 
Route::get('tempat', function () {
    return view('korea.tempat');
});

Route::get('panduan', function () {
    return view('korea.panduan');
});

Route::get('muslim', function () {
    return view('korea.muslim');
});


//admin
Route::get('admin', function () {
    return view('pages.admin');
}); 

Route::resource('/list-post', 'BlogController');
Route::get('/add-post', 'BlogController@create')->name('add');
Route::get('/list-post', 'BlogController@index')->name('list');
Route::post('/add-post/post', 'BlogController@store');
Route::get('/list-post/delete/{id}', 'BlogController@destroy');
Route::get('/list-post/view/{id}', 'BlogController@show');
Route::get('/list-post/edit/{id}', 'BlogController@edit');
Route::get('/list-post/update/{id}', 'BlogController@update');

Route::get('/', 'BlogController@index');
Route::get('/lihat', 'BlogController@index');
Route::post('/datapengunjung', 'BlogController@store');

Route::get('dtpengunjung', function () {
    return view('pages.admin.dtpengunjung');
});

Route::get('profil', function () {
    return view('pages.admin.profil');
});

Route::get('login', 'BlogController@index');

Route::get('/', function(){
      return view('pages.admin.logaktivitas');
});

Route::get('post', function () {
    return view('pages.admin.post');
});