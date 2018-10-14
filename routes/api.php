<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/campagnes','CampagneController');

Route::group(['prefix'=>'camoagnes'], function(){

    Route::apiResource('/{campagne}/cotisations','CotisationController');

});