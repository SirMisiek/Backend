<?php
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\AuthController;
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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/translations', [TranslationController::class, 'index']);
Route::get('/translations/{id}', [TranslationController::class, 'show']);
Route::get('/translations/serach/{name}', [TranslationController::class, 'serach']);

//Protected Routes - Sanctum
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/translations', [TranslationController::class, 'store']);
    Route::put('/translations/{id}', [TranslationController::class, 'update']);
    Route::delete('/translations/{id}', [TranslationController::class, 'delete']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
