<?php

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::any('home', 'HomeController@index');

Route::any('/', 'HomeController@index');
