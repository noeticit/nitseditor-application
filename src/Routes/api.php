<?php

use Illuminate\Http\Request;
use Nitseditor\Framework\Models\User;
use Nitseditor\Framework\Resources\UserResource;

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
    return new UserResource(User::where('id', auth()->id())->first());
});

//Auth::routes(['verify' => true]);

Route::group(['middleware'=>['auth:api']],function() {

    Route::prefix('permissions')->group(function() {

        Route::get('/table', 'PermissionController@index');

    });

});
