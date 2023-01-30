<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserApiControllers;
use App\Http\Controllers\TodoApiControllers;
use App\Models\Users;
use App\Models\Todo;

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




//*TODO API CRUD*\\
Route::get('/todo',[TodoApiControllers::class,'index']);
Route::prefix('/todos')->middleware('auth:sanctum')->group(function(){
Route::get('/', [TodoController::class, 'getAllTodos']); 
Route::post('/create', [TodoController::class, 'create']); 
Route::patch('/update/{id}', [TodoController::class, 'update']); 
Route::delete('/delete/{id}', [TodoController::class, 'delete']); 
});


// USER CRUD
Route::get('/users', [UserApiController::class, 'getAllUser']);
Route::post('/users/update/{id}', [UserApiController::class, 'update']);
Route::delete('users/delete/{id}', [UserApiController::class, 'delete'] );



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


