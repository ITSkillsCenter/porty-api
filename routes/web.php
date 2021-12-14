<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['post','get', ],'/welcome', [ServiceController::class, 'welcome']);
Route::match(['post','get', ],'/services', [ServiceController::class, 'services']);



Route::get('/', function () {
    return view('welcome');
});
