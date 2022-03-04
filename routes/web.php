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

Route::get('/', function () {
    return view('landingPage.index');
});

Route::get('/about', function () {
    return view('landingPage.about');
});

Route::get('/services', function () {
    return view('landingPage.services');
});

Route::get('/contactus', function () {
    return view('landingPage.contactus');
});

Route::get('/blog', function () {
    return view('landingPage.blog');
});

Route::get('/testimonials', function () {
    return view('landingPage.testimonials');
});

Auth::routes();

Route::get('/home', 'LandingPageController@index')->name('home');
Route::get('/book', 'BookController@index')->name('book.index');
Route::post('/book', 'BookController@destroy')->name('book.destroy');

Route::get('book/data', 'BookController@data')->name('book.data');
Route::post('book/store', 'BookController@store')->name('book.store');
Route::get('auth/{provider}','Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\SocialiteController@handleProviderCallBack');
