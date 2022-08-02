<?php

use App\Http\Controllers\TranslationControler;
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
//Public Routes
Route::get('/translations', [TranslationControler::class, 'index']);
Route::get('/translations/{id}', [TranslationControler::class, 'show']);
Route::get('/translations/serach/{name}', [TranslationControler::class, 'serach']);

//Protected Routes - Sanctum
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/translations', [TranslationControler::class, 'store']);
    Route::put('/translations/{id}', [TranslationControler::class, 'update']);
    Route::delete('/translations/{id}', [TranslationControler::class, 'delete']);
});
