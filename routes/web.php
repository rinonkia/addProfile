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

// Authにてログイン中であれば自らの編集画面に、そうでなければWelcomeに
Route::get('/', 'ProfilesController@index');

//外部からの直リンク、もしくは自分のプロフィールを見るとき
Route::get('users/{name}', 'ProfilesController@show')->name('users.show');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// プロフィールに手を加える場合
Route::group(['middleware' => 'auth'], function() {
    Route::resource('profiles', 'ProfilesController', ['only' => ['create', 'store', 'update', 'destroy', 'edit']]);
    Route::resource('texts', 'ProfileTextsController');
    
    //プロフィール画像の登録
    //Route::post('image', 'ImageController@store')->name('image.post');
});