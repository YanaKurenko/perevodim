<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function(){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
});


Route::middleware('auth:admin')->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
   
//--------------------------Variable-------------------------------------
    Route::get('/dashboard/list', [ContactController::class, 'list'])->name('list');
    
    Route::get('/dashboard/addvariable', [ContactController::class, 'create']);
    Route::post('/dashboard/addvariable', [ContactController::class, 'store']);

    Route::get('/dashboard/editvar/{variable}',[ContactController::class, 'edit']);
    Route::post('/dashboard/editvar/{variable}',[ContactController::class, 'update']);

    Route::get('/dashboard/deletevar/{variable}',[ContactController::class, 'destroy']);
  //--------------------------Page-------------------------------------  
    Route::get('/dashboard/pages', [PageController::class, 'listPages']);
    Route::post('/dashboard/pageByItem', [PageController::class, 'pageItem']);
    
    Route::get('/dashboard/addpage', [PageController::class, 'create']);
    Route::post('/dashboard/addpage', [PageController::class, 'store']);
   
    Route::get('/dashboard/editpage/{page}', [PageController::class, 'edit']);
    Route::post('/dashboard/editpage/{page}', [PageController::class, 'update']);

    Route::get('/dashboard/deletepage/{page}', [PageController::class, 'destroy']);
    //--------------------------------Menu---------------------------------------
    Route::get('/dashboard/menuitems',[MenuItemController::class,'list']);

    Route::get('/dashboard/addmenu',[MenuItemController::class,'create']);
    Route::post('/dashboard/addmenu',[MenuItemController::class,'store']);

    Route::get('/dashboard/editmenu/{menulist}',[MenuItemController::class,'edit']);
    Route::post('/dashboard/editmenu/{menulist}',[MenuItemController::class,'update']);

    Route::get('/dashboard/deletemenu/{menulist}',[MenuItemController::class,'destroy']);
    
  

     Route::resource('/dashboard', AdminController::class);
});











	

