<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilmCollection;
use App\Http\Resources\FilmResource;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();

        //return $films;
        //return FilmResource::collection($films);
        return new FilmCollection($films);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'naziv'=>'required|string|max:255',
            'opis'=>'required|string||max:255',
            'godina_izdanja'=>'required|digits:4|integer|min:1000|max:'.(date('Y')+1),
            'zanr_id'=>'required',
            'reditelj_id'=>'required'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $film=Film::create([
            'naziv'=>$request->naziv,
            'opis'=>$request->opis,
            'godina_izdanja'=>$request->godina_izdanja,
            'zanr_id'=>$request->zanr_id,
            'rediteljr_id'=>$request->reditelj_id,
            'user_id'=>Auth::user()->id          
        ]);

        return response()->json(['Film je uspesno kreiran.', new FilmResource($film)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {

        return new FilmResource($film);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $validator=Validator::make($request->all(),[
            'naziv'=>'required|string|max:255',
            'opis'=>'required|string|max:255',
            'godina_izdanja'=>'required|digits:4|integer|min:1000|max:'.(date('Y')+1),
            'zanr_id'=>'required',
            'reditelj_id'=>'required'
        ]);
        
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $film->naziv=$request->naziv;
        $film->opis=$request->opis;
        $film->godina_izdanja=$request->godina_izdanja;
        $film->zanr_id=$request->zanr_id;
        $film->reditelj_id=$request->reditelj_id;


        
        $film->save();

        return response()->json(['Film uspesno izmenjen', new FilmResource($film)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return response()->json(['Film uspesno izbrisan', new FilmResource($film)]);

    }
}
