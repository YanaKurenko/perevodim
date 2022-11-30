<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\NewsController;
use App\Models\Page;
use App\Models\News;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

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
    return view('start');
});

Route::get('/services', [PageController::class, 'services']);
Route::get('/about_us', [PageController::class, 'aboutus']);
Route::get('/useful', [PageController::class, 'useful']);

Route::get('/', function(){
    return view('pages.main.form');
},[FormController::class, 'upload']);

Route::post('/form', [FormController::class, 'sendmail']);










	
