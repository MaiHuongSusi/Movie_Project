<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\TypeFilm;
use App\FilmTypeFilm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class FilmController extends Controller
{
    public function index()
    {
        return Film::all();
    }

    public function show($idfilm)
    {
        return Film::find($idfilm);

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

    public function showListFilmByType($path)
    {
        $listfilmbytype = DB::table('films')
            ->join('film_type_films', 'film_type_films.id_film', '=', 'films.id')
            ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
            ->select('films.*')
            ->where('type_films.path', '=' , $path)
            ->get();

        $para = \Request::segment(3);
        switch($para){
            case("new-film"):
                $path = "new-film";
                $h = "PHIM MỚI";
                break;
            case("romantic-film"):
                $path = "romantic-film";
                $h = "PHIM TÌNH CẢM";
                break;
            case("cinema-film"):
            $path = "cinema-film";
                $h = "PHIM CHIẾU RẠP";
                break;
            case("action-film"):
            $path ="action-film";
                $h = "PHIM HÀNH ĐỘNG";
                break;
            case("drama-film"):
            $path ="drama-film";
                $h = "PHIM TÂM LÝ";
                break;
            case("historical-film"):
            $path ="historical-film";
                $h = "PHIM CỔ TRANG";
                break;
            case("cartoon-film"):
            $path ="cartoon-film";
                $h = "PHIM HOẠT HÌNH";
                break;
            case("hero-film"):
            $path ="hero-film";
                $h = "PHIM ANH HÙNG";
                break;
        };
        return view('front.pages.typefilm',  compact('listfilmbytype', 'para', 'h'));
    }

    public function showTypeOfFilm($idfilm){
        $type = DB::table('films')
            ->join('film_type_films','film_type_films.id_film', '=', 'films.id')
            ->join('type_films', 'type_films.id', '=', 'film_type_films.id_type_film')
            ->select('type_films.name_type')
            ->where('films.id', $idfilm)
            ->get();
        return $type;
    }
    public function showIndexFilm($idfilm){
        $film = Film::find($idfilm);
        $type = FilmController::showTypeOfFilm($idfilm);
        $counttype = count($type);
        return view('front.pages.indexfilm', compact('film', 'type', 'counttype'));
    }

}
