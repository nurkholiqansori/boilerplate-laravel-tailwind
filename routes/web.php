<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function () {
        Route::get('/register', 'RegisterController@show')->name('register.index');
        Route::get('/login', 'LoginController@show')->name('login.index');
        Route::get('/password/reset', 'ForgotPasswordController@show')->name('password.reset');

        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        Route::post('/password/reset', 'ForgotPasswordController@reset')->name('password.reset.perform');
        Route::post('/password/resetpassword', 'ForgotPasswordController@resetpassword')->name('password.resetpassword.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard',  function () {
            return view('dashboard');
        })->name('dashboard.index');

        // Module User
        Route::get('/users', 'UsersController@index')->name('users.index');
        Route::get('/users/create', 'UsersController@create')->name('users.create');
        Route::get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
        Route::get('/users/{id}/editpassword', 'UsersController@editpassword')->name('users.editpassword');

        Route::post('/users', 'UsersController@store')->name('users.store');
        Route::post('/users/{id}', 'UsersController@update')->name('users.update');
        Route::post('/users/{id}/updatepassword', 'UsersController@updatepassword')->name('users.updatepassword');

        Route::delete('/users/{id}', 'UsersController@destroy')->name('users.destroy');
        
        // Module Account Setting
        Route::get('/account-setting', 'AccountSettingController@index')->name('accountsetting.index');


        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
