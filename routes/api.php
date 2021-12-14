<?php

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

Route::match(['post', 'get'], '/catalogue', [CatalogueController::class, 'catlogueapi']);

Route::match(['post', 'get'], '/testimonial', [TestimonialController::class, 'testimonialapi']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
