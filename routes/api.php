<?php

use Illuminate\Http\Request;
use App\Film;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('films', function() {
    return Film::all();
});
 
Route::get('films/{id_film}', function($id_film) {
    return Film::find($id_film);
});

Route::post('films', function(Request $request) {
    return Film::create($request->all);
});

Route::put('films/{id_film}', function(Request $request, $id_film) {
    $film = Film::findOrFail($id_film);
    $film->update($request->all());

    return $film;
});

Route::delete('films/{id_film}', function($id_film) {
    Film::find($id_film)->delete();

    return 204;
});