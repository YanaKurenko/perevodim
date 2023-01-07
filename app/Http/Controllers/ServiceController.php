<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
class ServiceController extends Controller
{
    public function index()
    {
        $x = Service::get();
        return view('main.serviceMain', compact('x'));
    }
}
