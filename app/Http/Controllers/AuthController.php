<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('admin.auth.login');
    }
    public function login(Request $request){
        $data = $request->validate([
            "email" =>["required","email","string"],
            "password" =>["required"]
        ]);
        if(auth("admin")->attempt($data)){
            return redirect()->action([AdminController::class, 'index']);
            // return redirect(route("admin.dashboard")); 
            //return redirect(route("layouts.admin"))
            
        }
        return redirect()->route("admin.login")->withErrors(["email"=>"Пользователь не найден"]);
    }

    public function logout(){
        auth("admin")->logout();
        return redirect()->route('login');
    }
}
