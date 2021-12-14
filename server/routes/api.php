<?php

use App\Http\Controllers\OfferController;
use App\Models\Offer;
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

Route::post("offers", [OfferController::class, "create"]);

Route::get("offers", [OfferController::class, "all"]);

Route::put("offers/{id}", [OfferController::class, "modify"]);

Route::post("linguaggi", [OfferController::class, "linguaggi"]);

Route::post("orderRal", [OfferController::class, "orderRal"]);

Route::get("one/{id}", [OfferController::class, "one"]);