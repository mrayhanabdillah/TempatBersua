<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;
use App\Models\User;
use App\Models\resto;
use Illuminate\Support\Facades\Http;

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
    return view('homepage');
});

Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'store']);
Route::get('/login',[UserController::class,'loginPage']);
Route::post('/login',[UserController::class,'login']);
Route::put('/logout/{id}', [UserController::class, 'logout']);

// Admin
Route::get('/admin', function () {
    $user = User::where('status', 'logged in')->get();
    $resto = resto::where('status', 'approved')->get();
    $url = "https://kanglerian.github.io/api-wilayah-indonesia/api/districts/3273.json";
    $data = json_decode(file_get_contents($url), true);

    return view('adminPage',compact('user','data','resto'));
});
Route::post('/addAdmin',[UserController::class,'storeAdmin']);


// Iklan
Route::post('/iklanAdmin',[RestoController::class,'store']);
Route::post('/updateResto/{id}',[RestoController::class,'update']);
Route::get('/foryou',[RestoController::class, 'index']);
Route::get('/foryou/{district}',[RestoController::class, 'indexDistrict']);


