<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Countries\{
    IndexController,
    ShowController
};
use App\Http\Controllers\Users\{
    StoreController
};

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/', function () {
    return redirect('v1');
});
Route::get('/api', function () {
	return redirect('v1');
});

Route::get('v1', HomeController::class);

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'countries'], function () {
        Route::get('', IndexController::class);
        Route::get('/{id}', ShowController::class);
    });

    Route::group(['prefix' => 'users'], function () {
        Route::post('', StoreController::class);
    });
});
