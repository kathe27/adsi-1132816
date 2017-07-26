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

//Articles
Route::get('/', 'ArticleController@listArticles');
Route::resource('Article', 'ArticleController');
Route::post('Article/search', 'ArticleController@search');
Route::get('Articles/pdf', 'ArticleController@pdf');
Route::get('Articles/excel', 'ArticleController@excel');

//Categories
Auth::routes();
Route::resource('category', 'CategoryController');
Route::post('ajaxsearch', 'CategoryController@ajaxsearch');

Route::get('/home', 'HomeController@index')->name('home');

//Cambiar Idioma
Route::get('login/{locale}', function ($locale){
	App::setlocale($locale);
	return view('auth.login');
});


Route::get('/home', ['as' => 'home','uses' => 'HomeController@index']);

Route::get('auth/facebook', 'FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'FacebookController@handleFacebookCallback');
Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'GoogleController@handleGoogleCallback');
Route::get('auth/twitter', 'TwitterController@redirectToTwitter');
Route::get('auth/twitter/callback', 'TwitterController@handleTwitterCallback');


