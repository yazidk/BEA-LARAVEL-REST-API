<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\Fiche_tenue_compteController;

<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Public Routes
Route::post('/register' , [AuthController::class , 'register']);


//Protected Routes
Route::group(['middleware' => ['auth:sanctum']] , function () {
    Route::post('/ajouter-fiche' , [Fiche_tenue_compteController::class , 'store']);
    Route::post('/logout' , [Fiche_tenue_compteController::class , 'logout']); 
=======

// Public routes 
Route::post('/register' , [AuthController::class , 'register']);
Route::post('/login' , [AuthController::class , 'login']);
Route::post('/ajouter-fiche' , [Fiche_tenue_compteController::class , 'store']);


// Protected routes 
Route::group(['middleware' => ['auth:sanctum']] , function () {
   
    Route::post('/logout' , [AuthController::class , 'logout']);
>>>>>>> origin/yazid_dev
});

