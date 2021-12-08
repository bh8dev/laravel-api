<?php

use App\Http\Controllers\Api\V1\{
    ApiController,
    ProductController
};
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

/*Route::get('categories', [ApiController::class, 'index'])
    ->name('categories.index');
Route::get('categories/{category}', [ApiController::class, 'show'])
    ->name('category.show');
Route::post('categories', [ApiController::class, 'store'])
    ->name('category.store');
Route::put('categories/{category}', [ApiController::class, 'update'])
    ->name('category.update');
Route::delete('categories/{category}', [ApiController::class, 'destroy'])
    ->name('category.destroy');*/

Route::apiResource('categories', ApiController::class);

Route::get('products', [ProductController::class, 'index'])
    ->name('products.index');
