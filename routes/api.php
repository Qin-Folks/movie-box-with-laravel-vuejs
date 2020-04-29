<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function() {

    Route::get("/movies", "MoviesController@listMovies");
    Route::get("/movies/{id}", "MoviesController@movieDetails");
    Route::post("/login", "LoginController@login");
    Route::post("/register", "RegisterController@register");
    Route::get('/logout', 'LogoutController@logout')->middleware('auth:api');

   
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post("/movie/{id}/comment/new", "MoviesController@newComment");
        Route::post("/movie/new", "MoviesController@newMovie");
    });
 
});