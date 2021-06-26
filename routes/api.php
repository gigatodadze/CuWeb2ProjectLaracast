<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;

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

Route::get('stats',function (){
    return [
        'series' => 200,
        'lessons' => 1300
    ];
});


//Route::post('register',[UserAuthController::class, 'register']);
//Route::post('login',[UserAuthController::class, 'login']);

//Route::post('register', 'Auth\UserAuthController@register');
//Route::post('login', 'Auth\UserAuthController@login');

Route::apiResource('employee', 'EmployeeController')->middleware('auth:api');


Route::post('register', [UserAuthController::class, 'register'])->name('UserAuthController.register');
Route::post('login', [UserAuthController::class, 'login'])->name('UserAuthController.login');
