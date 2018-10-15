<?php

namespace App\Http\Controllers;

use App\models\Campagne;
use App\Http\Resources\Campagne\CampagneResource;
use App\Http\Resources\Campagne\CampagneCollection;
use Illuminate\Http\Request;
use App\Http\Requests\CampagneRequest;
use Symfony\Component\HttpFoundation\Response;

class CampagneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }
    public function index()
    {
        return CampagneCollection::collection(Campagne::paginate(5));
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
    public function store(CampagneRequest $request)
    {
        $campagne = new Campagne;
        $campagne->titre = $request->titre;
        $campagne->type = $request->type;
        $campagne->shortDescription = $request->shortDescription;
        $campagne->longDescription = $request->longDescription;
        $campagne->dateDebut = $request->dateDebut;
        $campagne->dateFin = $request->dateFin;
        $campagne->save();
        return response([
            'data' => new CampagneResource($campagne)
        ], Response::HTTP_CREATED) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Campagne  $campagne
     * @return \Illuminate\Http\Response
     */
    public function show(Campagne $campagne)
    {
        return new CampagneResource($campagne);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Campagne  $campagne
     * @return \Illuminate\Http\Response
     */
    public function edit(Campagne $campagne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Campagne  $campagne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campagne $campagne)
    {
        $campagne->update($request->all());
        return response([
            'data' => new CampagneResource($campagne)
        ], Response::HTTP_CREATED) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Campagne  $campagne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campagne $campagne)
    {
        $campagne->delete();
        return response(null, Response::HTTP_NO_CONTENT) ;
    }
}
