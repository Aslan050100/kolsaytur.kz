<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Route;
class AppController extends Controller
{

    public function index()
    {
        return view('app');
    }

}
