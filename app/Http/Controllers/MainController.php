<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_type;
use App\Room;
use App\Comfort;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
    	$id = 1;
    	$pro_type = Product_type::find($id);
    	$rooms = Room::first();
    	$comfrots = Comfort::all();
    	$products = Product::all();
    	//dd($rooms);
    	//dd($comfrots->load('products')[0]->name);
    	//dd($rooms->load('products'));
    	//dd($pro_type->load('products')->name);
    	return view('index',['products'=>$products]);
    
    }
}
