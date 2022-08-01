<?php
use App\Models\Translation;
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
Route::get('/translation', function() {
 return Translation::all();
});

Route::post('/translation', function() {
 return Translation::create([
    'name' => 'Pierwsze tłumaczenie',
    'slug' => 'pierwsze-tlumaczenie',
    'description' => 'To jest pierwsze tłumaczenie wykonane dla naszej firmy',
    'price' => '99.99',
    'timetocomplete' => 'przewidywany czas to około 2 tygodnie'
 ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
