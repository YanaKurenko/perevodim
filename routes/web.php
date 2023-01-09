<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\ServiceController;



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

Route::get('/', function(){
    return view('main.form');
},[FormController::class, 'upload']);
Route::get('/', [MenuItemController::class, 'index']);
Route::get('google-autocomplete', [GoogleController::class, 'index']);

Route::get('/services', [PageController::class, 'services']);
Route::get('/about_us', [PageController::class, 'aboutus']);
Route::get('/prices', [PageController::class, 'prices']);
Route::get('/about_us/{page}', [PageController::class, 'show']);

Route::get('/useful', [PageController::class, 'useful']);
Route::get('/useful/{page}', [PageController::class, 'show'] );
Route::get('/contact', [ContactController::class, 'index'] );

Route::get('/', [PageController::class, 'onMainPage']);
Route::get('/serviceMain', [ServiceController::class, 'index']);

//----------------Blade for @includeif---------------------
Route::post('/form', [FormController::class, 'sendmail']);
//-------------------------------------------------------












	

