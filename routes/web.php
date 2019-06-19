<?php
use App\User;

Route::get('/', function () {
    return view('front.pages.welcome');
});

Route::get('/login', 'LoginController@index');
Route::post('/checklogin', 'LoginController@checklogin');
Route::get('/successlogin', 'LoginController@successlogin');
Route::get('/logout', 'LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('films', 'FilmController@index')->name('films');
Route::get('films/{id_film}', 'FilmController@show')->name('films.show');
Route::post('films', 'FilmController@store')->name('films.store');
Route::put('films/{id_film}', 'FilmController@update')->name('films.update');
Route::delete('films/{id_film}', 'FilmController@delete')->name('films.delete');
Route::get('films/{name_type}', 'FilmController@showListFilmByType');