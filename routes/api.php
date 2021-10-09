<?php

use App\Http\Controllers\Admin\ComproController;
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
|76
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/checkawb', [App\Http\Controllers\Admin\PrimController::class, 'checkAwb'])->name('checkAwb');
Route::get('/ongkir', [ComproController::class, 'cek_ongkir']);