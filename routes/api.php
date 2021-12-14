<?php

<<<<<<< HEAD
use App\Http\Controllers\ContactController;
=======
use App\Http\Controllers\ServiceController;
>>>>>>> 81cf4ed6a5b72a1dd626d750c920b51e53914d8b
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


Route::match(['post','get', ],'/services', [ServiceController::class, 'services']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::match(['get','post', 'PUT'],'/contactform', [ContactController::class, 'contactform']);
Route::match(['get','post', 'PUT'],'/Subscriptionform', [ContactController::class, 'Subscriptionform']);
Route::match(['GET','post', 'PUT'],'/getter', [ContactController::class, 'getter']);
