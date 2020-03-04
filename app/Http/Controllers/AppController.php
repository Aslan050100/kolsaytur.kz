<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Route;
use App\Product;
class AppController extends Controller
{

    public function index()
    {
        return view('app');
    }
    public function detail($id, $slug = '')
    {
        $product = Product::findOrFail($id);

        return view('app')
            ->withProduct($product)
            ->withCanonical($product->url);
    }

}
