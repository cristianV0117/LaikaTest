<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Countries\{
    IndexController,
    ShowController
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
    Route::get('/countries', IndexController::class);
    Route::get('/countries/{id}', ShowController::class);
});
