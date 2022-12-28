<?php

namespace App\Http\Controllers;

use App\Http\Resources\RediteljCollection;
use App\Http\Resources\RediteljResource;
use App\Models\Reditelj;
use Illuminate\Http\Request;

class RediteljController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reditelj=Reditelj::all();
        return new RediteljCollection($reditelj);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $red = Reditelj::find($id);
        if (is_null($red)) {
            return response()->json("Reditelj sa ovim id-em nije pronadjen", 404);
        }

        return response()->json(new RediteljResource($red));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function edit(Reditelj $reditelj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reditelj $reditelj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reditelj $reditelj)
    {
        //
    }
}
