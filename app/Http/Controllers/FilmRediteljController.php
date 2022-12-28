<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilmCollection;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmRediteljController extends Controller
{
    public function index($reditelj_id)
    {
        $film=Film::get()->where('reditelj_id', $reditelj_id);
        if(is_null($film)){
            return response()->json('Nije pronadjen nijedan film izabranog reditelja', 404);
        }
        return response()->json(new FilmCollection($film));
    }
}
