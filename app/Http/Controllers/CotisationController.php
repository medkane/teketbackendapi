<?php

namespace App\Http\Controllers;

use App\models\Cotisation;
use App\models\Campagne;
use Illuminate\Http\Request;
use App\Http\Resources\Cotisation\CotisationResource;

class CotisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Campagne $campagne)
    {
        return CotisationResource::collection($campagne->cotisations) ;
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
     * @param  \App\models\Cotisation  $cotisation
     * @return \Illuminate\Http\Response
     */
    public function show(Cotisation $cotisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Cotisation  $cotisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Cotisation $cotisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Cotisation  $cotisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotisation $cotisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Cotisation  $cotisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cotisation $cotisation)
    {
        //
    }
}
