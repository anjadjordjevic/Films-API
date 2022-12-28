<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilmCollection;
use App\Models\Film;
use Illuminate\Http\Request;

class UserFilmController extends Controller
{
    public function index($user_id)
    {
        $films = Film::get()->where('user_id', $user_id);
        if (is_null($films)){
            return response()->json('Nije pronadjen nijedan film', 404);
        }
        //return response()->json($films);
        return response()->json(new FilmCollection($films));
    }
}
