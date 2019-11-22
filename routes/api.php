<?php

use Illuminate\Http\Request;

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

Route::resource('user', 'UserController');
Route::resource('team', 'TeamController');
Route::resource('teamplayer', 'TeamPlayerController');
Route::get('test', function(){
    $data = 'data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAA.';
    $pos  = strpos($data, ';');
    $type = explode('/', substr($data, 0, $pos))[1];
    return $type;
});
