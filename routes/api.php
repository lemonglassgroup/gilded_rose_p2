<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/category', [CategoryController::class, 'store']);

Route::get('/item/category/{categoryId}', [ItemController::class, 'getByCategory']);

Route::delete('/item/category/{categoryId}', [ItemController::class, 'removeByCategory']);

Route::post('/item', [ItemController::class, 'store']);

Route::put('/item/{itemId}', [ItemController::class, 'edit']);
