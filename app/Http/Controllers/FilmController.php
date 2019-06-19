<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film; 
use App\TypeFilm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function index()
    {
        return Film::all();
    }

    public function show($id_film)
    {
        return Film::find($id_film);
    }

    public function store(Request $request)
    {
        $film = Film::create($request->all());
        return response()->json([
            'message' => 'Great success! New film created',
            'film' => $film
        ]);        
    }

    public function update(Request $request, $id_film)
    {
        $film = Film::findOrFail($id_film);
        $film->update($request->all());
        return response()->json([
            'message' => 'Great success! Film updated',
            'film' => $film
        ]);
    }

    public function delete(Request $request, $id_film)
    {
        $film = Film::findOrFail($id_film);
        $film->delete();
        return 204;
    }

    public function showListFilmByType($type_name)
    {
        $idtype = DB::table('type_films')->where('name_type', $type_name)->value('id');
        $listfilmbytype = DB::table('films')->where('id_type', $idtype);
        return response()->json([
            'message' => 'Great success!',
            'listfilmbytype' => $listfilmbytype
        ]);
    }
}
