<?php

use Illuminate\Http\Request;
use App\Film;
use App\TypeFilm;
use App\FilmTypeFilm;
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');

Route::group(['middleware' => ['jwt.verify']], function() {
Route::get('user', 'UserController@getAuthenticatedUser');
Route::get('closed', 'DataController@closed');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//GET ALL FILMS
Route::get('films', 'FilmController@index');

//GET FILM BY ID
Route::get('films/{id}', 'FilmController@show');

//CREATE NEW FILM
Route::post('films', 'FilmController@store');

//UPDATE FILM
Route::put('films/{id_film}', 'FilmController@update');

//DELETE FILM
Route::delete('films/{id_film}', 'FilmController@delete');

//GET LIST FILM BY TYPE FILM
Route::get('films/type/{path}', function($path){
    $listfilmbytype = DB::table('films')
        ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
        ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
        ->select('films.*')
        ->where('type_films.path', '=' , $path)
        ->get();

    return response()->json([
        'message' => 'Great success!',
        'listfilmbytype' => $listfilmbytype
    ]);
});
