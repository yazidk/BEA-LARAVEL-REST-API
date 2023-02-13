<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\Fiche_tenue_compteController;


// Public routes 
Route::post('/register' , [AuthController::class , 'register']);
Route::post('/login' , [AuthController::class , 'login']);
Route::post('/ajouter-fiche' , [Fiche_tenue_compteController::class , 'store']);


// Protected routes 
Route::group(['middleware' => ['auth:sanctum']] , function () {
   
    Route::post('/logout' , [AuthController::class , 'logout']);
});
