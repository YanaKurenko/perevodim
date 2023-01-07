<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
// use App\Http\Controllers\UsefulController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest:admin")->group(function(){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
});


Route::middleware("auth:admin")->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
   

    Route::get('/dashboard/list', [ContactController::class, 'list'])->name('list');
    //-------------------------Add-Variable-------------------------------------
    Route::get('/dashboard/addvariable', [ContactController::class, 'create']);
    Route::post('/dashboard/addvariable', [ContactController::class, 'store']);
    //----------------------------Edit-Variable---------------------------------
    Route::get('/dashboard/editvar/{variable}',[ContactController::class, 'edit']);
    Route::post('/dashboard/editvar/{variable}',[ContactController::class, 'update']);
    //------------------------------Delete-Variable-----------------------------
    Route::get('/dashboard/deletevar/{variable}',[ContactController::class, 'destroy']);
    //====================================================================
    Route::get('/dashboard/pages', [PageController::class, 'listPages']);
    Route::post('/dashboard/pageByItem', [PageController::class, 'pageItem']);
    //-------------------------Add-Page-------------------------------------   
    Route::get('/dashboard/addpage', [PageController::class, 'create']);
    Route::post('/dashboard/addpage', [PageController::class, 'store']);
    //---------------------------Edit-Page-------------------------------------
    Route::get('/dashboard/editpage/{page}', [PageController::class, 'edit']);
    Route::post('/dashboard/editpage/{page}', [PageController::class, 'update']);
    //------------------------------Delete-Page-----------------------------
    Route::get('/dashboard/deletepage/{page}', [PageController::class, 'destroy']);

     Route::resource('/dashboard', AdminController::class);
});











	

