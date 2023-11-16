<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::controller(MediaApiController::class)->group(function () {
    Route::get('leads-form', [MediaApiController::class, 'index']);
    Route::post('leads-form-submit', [MediaApiController::class, 'submitAPIRequest']);
    Route::get('/generateresponse', [MediaApiController::class, 'generateApiResponse']);
    //Route::post('/longlat', [PostCodesController::class, 'postcodesForGivenLngAndLat']);
}); 
