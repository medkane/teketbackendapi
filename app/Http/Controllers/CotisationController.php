<?php

namespace App\Http\Controllers;

use App\models\Cotisation;
use App\models\Campagne;
use Illuminate\Http\Request;
use App\Http\Resources\Cotisation\CotisationResource;
use App\Http\Requests\CotisationRequest;
use Symfony\Component\HttpFoundation\Response;

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
    public function store(CotisationRequest $request, Campagne $campagne)
    {
        $cotisation = new Cotisation($request->all());
        $campagne->cotisations()->save($cotisation);
        return response([
            'data' => new CotisationResource($cotisation)
        ], Response::HTTP_CREATED) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Cotisation  $cotisation
     * @return \Illuminate\Http\Response
     */
    public function show( Campagne $campagne, Cotisation $cotisation)
    {
        return new CotisationResource($cotisation);
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
    public function update(Request $request, Campagne $campagne, Cotisation $cotisation)
    {
        $cotisation->update($request->all());
        return response([
            'data' => new CotisationResource($cotisation)
        ], Response::HTTP_CREATED) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Cotisation  $cotisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campagne $campagne, Cotisation $cotisation)
    {
        $cotisation->delete();
        return response(null, Response::HTTP_NO_CONTENT) ;
    }
}
