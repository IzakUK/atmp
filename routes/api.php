<?php

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50

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

<<<<<<< HEAD
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
=======
// 添加用户注册、登录、注销的路由
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
>>>>>>> 3f4af34f8a759de5f645cd36f6761d9412f06a50
