<?php
use App\User;
use App\Film;
use App\TypeFilm;
use App\FilmTypeFilm;

Route::get('/', function () {
    return view('front.pages.welcome');
});
Route::get('/login', 'LoginController@index');
Route::post('/checklogin', 'UserController@authenticate');
Route::get('/successlogin', 'UserController@successlogin');
Route::get('/logout', 'UserController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('films', 'FilmController@index');
Route::get('films/{idfilm}', 'FilmController@show');
Route::post('films', 'FilmController@store');
Route::put('films/{id_film}', 'FilmController@update');
Route::delete('films/{id_film}', 'FilmController@delete');
Route::get('films/type/{path}', 'FilmController@showListFilmByType');
Route::get('films/index/{idfilm}', 'FilmController@showIndexFilm');

View::composer(['*'], function ($view) {
    $listfilms = Film::all();
    $listnewfilm = DB::table('films')
    ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
    ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
    ->select('films.*')
    ->where('type_films.path', '=' , 'new-film')
    ->get();
    $listcinemafilm = DB::table('films')
    ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
    ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
    ->select('films.*')
    ->where('type_films.path', '=' , 'cinema-film')
    ->get();
    $listromanticfilm = DB::table('films')
    ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
    ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
    ->select('films.*')
    ->where('type_films.path', '=' , 'romantic-film')
    ->get();
    $listactionfilm = DB::table('films')
    ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
    ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
    ->select('films.*')
    ->where('type_films.path', '=' , 'action-film')
    ->get();
    $listdramafilm = DB::table('films')
    ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
    ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
    ->select('films.*')
    ->where('type_films.path', '=' , 'drama-film')
    ->get();
    $listhistoricalfilm = DB::table('films')
    ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
    ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
    ->select('films.*')
    ->where('type_films.path', '=' , 'historical-film')
    ->get();
    $listcartoonfilm = DB::table('films')
    ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
    ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
    ->select('films.*')
    ->where('type_films.path', '=' , 'cartoon-film')
    ->get();
    $listherofilm = DB::table('films')
    ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
    ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
    ->select('films.*')
    ->where('type_films.path', '=' , 'hero-film')
    ->get();
    $view->with('listfilms', $listfilms);
    $view->with('listnewfilm', $listnewfilm);
    $view->with('listcinemafilm', $listcinemafilm);
    $view->with('listromanticfilm', $listromanticfilm);
    $view->with('listactionfilm', $listactionfilm);
    $view->with('listdramafilm', $listdramafilm);
    $view->with('listhistoricalfilm', $listhistoricalfilm);
    $view->with('listcartoonfilm', $listcartoonfilm);
    $view->with('listherofilm', $listherofilm);


});
