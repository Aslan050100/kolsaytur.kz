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
    public function index (Request $req){
    	$id = 1;
    	$pro_type = Product_type::find($id);
    	$rooms = Room::first();
    	$comfrots = Comfort::all();
    	$products = Product::all();
    	return view('index',['products'=>$products]);
    
    }
    public function search(Request $req){
    	$first_price = $req->first_price;
    	$second_price = $req->second_price;
    	$rooms  = Room::where('price','<=',$second_price)->where('price','>=',$first_price)->get();
    	//dd($rooms);
    	$prods = [];
    	//$products = $rooms[0]->products;
    	//dd($rooms->count());
    	for ($i = 0; $i <= ($rooms->count()-1); $i++) {
    		array_push($prods,$rooms[$i]->products);
    	}
    	//dd($prods[1][0]->rating);
    	//dd($prods[1][0]->pluck('rating_id'));
    	return view('index',['products'=>array_unique($prods)]);
    }
}
