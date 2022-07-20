<?php

use App\Http\controllers\ProductController;
use App\Http\controllers\SalesController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource(
    'products',ProductController::class
);
// Route::apiResource(
//     'products/{id_product}',ProductController::class,'show'
// );

//Con esto ya se jalan todas las funciones de la api
Route::apiResource(
    'sales', SalesController::class
);