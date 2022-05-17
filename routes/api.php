<?php

use App\Http\Controllers\kategoriaController;
use App\Http\Controllers\tesztController;
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

Route::get('tesztek', [tesztController::class, 'tesztek_listaz']);
Route::get('tesztek/kategoria/{id}', [tesztController::class, 'tesztekKat_listaz']);
Route::get('kategoria', [kategoriaController::class, 'kategoria_listaz']);
