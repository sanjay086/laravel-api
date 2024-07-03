<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user', function() {
    return "Hello World!!!";
});

Route::post('/user', function(){
    return response()->json("Post hit Successfully!!!");
});

Route::delete('/user/{id}', function($id){
    return response("DELETE".$id, 200);
});

Route::put('/user/{id}', function($id){
    return response("PUT".$id, 200);
});


// Create Api Using Laravel

Route::get('/test', function(){
    p("Working");
} );

//Route::post('/user/store', 'App\Http\Controllers\Api\UserController@store');

Route::post('/user/store', [UserController::class, 'store']);
//Route::post('testing', [Api\UserController::class, 'store']);
