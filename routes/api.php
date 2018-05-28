<?php
// API version
$v = 'v1';
Route::post($v . '/register', 'Auth\RegisterController@register');
Route::post($v . '/login', 'Auth\LoginController@login');
Route::post($v . '/logout', 'Auth\LogoutController@logout');

Route::get($v . '/me', 'Auth\MeController@me');

Route::get($v . '/test', 'Auth\MeController@test');

Route::group([
    // 'middleware' => 'jwt.auth',
], function ($router) use ($v) {

    Route::resource($v . '/books', 'BooksController');

});
