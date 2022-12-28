<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilmCollection;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmZanrController extends Controller
{
    public function index($zanr_id)
    {
        $film=Film::get()->where('zanr_id', $zanr_id);
        if(is_null($film)){
            return response()->json('Nije pronadjen nijedan film izabranog zanra', 404);
        }
        return response()->json(new FilmCollection($film));
    }
}