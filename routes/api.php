<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;
use Spatie\Permission\Traits\HasRoles;

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

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/login', [AdminController::class, 'login']);
Route::post('/register',[AdminController::class, 'register']);




    Route::group(['middleware' => ['auth:api']], function() { // Routes here
    
        Route::get('/userslist', [AdminController::class, 'details']);

        Route::get('/roles',[AdminController::class, 'roles']);

         Route::get('/permissions',[AdminController::class, 'permissions']);

         Route::get('/rolesandpermissions',[AdminController::class, 'rolesandpermissions']); 
    
    });  