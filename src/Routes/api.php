<?php

use Illuminate\Http\Request;
use Nitseditor\Application\Models\User;
use Nitseditor\Application\Resources\UserResource;

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

Route::post('login', 'UserController@login');

Route::post('page-permissions', 'PermissionController@index');
//Route::post('page-permissions-update/{page}', 'PermissionController@updatePage');

Route::apiResource('page', 'PermissionController');

//Route::post('upload_file', 'HomeController@uploadFile');

Route::post('upload-files', 'HomeController@upload');
