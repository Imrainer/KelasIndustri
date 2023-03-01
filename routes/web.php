<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterControllers;
use App\Http\Controllers\BlogControllers;
use App\Http\Controllers\FileUploadControllers;
use App\Http\Controllers\latihanlksuserController;
use App\Http\Middleware\RegisterLoginMiddleware;
use App\Repository\User\UserRepository;
use App\Services\User\UserService;
use App\Http\Controllers\Service;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('/web/page/page');
});

Route::get('/listuser',[latihanlksuserController::class,"listUser"]);
Route::get('/lks/login',[latihanlksuserController::class,"login"])->name('login')->middleware('guest');
Route::post('/lks/login/store',[latihanlksuserController::class,"loginstore"]);
Route::get('/lks/logout',[latihanlksuserController::class,"logout"]);
Route::get('/lks/listblog',[latihanlksuserController::class,"bloglist"]);

Route::get('/lks/createblog',[latihanlksuserController::class,"create"]); 
Route::post('/lks/createblog-store',[latihanlksuserController::class,"createstore"]); 
Route::get('lks/blog/update/{id}',[latihanlksuserController::class,"update"]);
Route::post('lks/updatestore',[latihanlksuserController::class,"updatestore"]);

Route::get('/landingpagelks', function() {
    return view('latihan_lks/landingpage',[
        "title" => "Landing Page"
    ]);
});
Route::get('/contacts', function () {
    return view('latihan_lks/contacts',[
        "title" => "Contacts"
    ]);
});



Route::get('/romeropizza', function () {
    return view ('romeropizza/allmenu',
    ["title" => "Home"
]);
});


Route::get('/landingpage',[RegisterControllers::class,'landingpage']);
Route::get('/register', [RegisterControllers::class,'register']);
Route::post('/register/store', [RegisterControllers::class,'create']);
Route::get('/login',[RegisterControllers::class,'login'])->name('login')->middleware('guest');
Route::post('/login/store',[RegisterControllers::class,'logged']);
Route::get('/logout', [RegisterControllers::class,'logout']);

Route::get('/tampildata', [RegisterControllers::class,'index'])->middleware('auth');
Route::get('/data/{id/edit', [RegisterControllers::class,'edit']);
Route::put('/data/{id}', [RegisterControllers::class,'update']);
Route::delete('/login/tabel/{id}', [RegisterControllers::class,'delete']);
Route::get("/user/{id}", [RegisterControllers::class,'finduserid']);
Route::get("/user/{email}", [RegisterControllers::class,'findbyemail']);
Route::get("/user/{username}", [RegisterControllers::class,'findbyusername']);


Route::get("/blog", [BlogControllers::class, 'blog_index']);
Route::get("/blog/create", [BlogControllers::class, 'adding']);
Route::post("/blog/create/store", [BlogControllers::class, 'create']);
Route::get("/blog/{id}/update", [BlogControllers::class, 'edit']);
Route::post("/blog/{id}/update/store", [BlogControllers::class, 'update']);
Route::delete('/blog/delete/{id}', [RegisterControllers::class,'delete']);


Route::get('/upload', [FileUploadControllers::class,'tampilan']);
Route::post('/upload/save', [FileUploadControllers::class,'upload']);

Route::get('/help', function () {
    return add();
});