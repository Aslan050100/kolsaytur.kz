<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_type;
use App\Room;
use App\Comfort;
use App\Room_type;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index (Request $req){
        $products = Product::with('rooms')->get();
        //$pro = $products->sortByDesc('rating');
        //$pro = $products->sortByDesc('visit');
        return view('index',['products'=>$products]);
    }
    
    public function search(Request $req){
    	$first_price = $req->first_price;
    	$second_price = $req->second_price;
        $products = Product::with('rooms')->whereHas('rooms', function($q) use($first_price,$second_price) {
            $q->whereBetween('price',[$first_price,$second_price]); 
        })->get();        
       return view('index',['products'=>$products]);
    
    }
    //API
    public function getProducts(){
        $products = Product::with('rooms')->get();
        return response()->json($products);  
    }
    public function searchProducts(Request $req){    
        $first_price = $req->first_price;
        $second_price = $req->second_price;
        $products = Product::with('rooms')->whereHas('rooms', function($q) use($first_price,$second_price) {
            $q->whereBetween('price',[$first_price,$second_price]); 
        })->get();        
       return response()->json($products);
    
    }
}
