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
        $rooms  = Room::get();
        $prods = [];
        for ($i = 0; $i <= ($rooms->count()-1); $i++) {
            array_push($prods,$rooms[$i]->products);
        }
    	return view('index',['products'=>array_unique($prods)]);
    }
    public function search(Request $req){
    	$first_price = $req->first_price;
    	$second_price = $req->second_price;
        $rooms  = Room::where('price','<=',$second_price)->where('price','>=',$first_price)->get();
    	$prods = [];
    	for ($i = 0; $i <= ($rooms->count()-1); $i++) {
    		array_push($prods,$rooms[$i]->products);
    	}
        $rooms_price=[];
        for ($i = 0; $i <= ($rooms->count()-1); $i++) {
            array_push($rooms_price,$prods[$i][0]->rooms[0]->price);
        }
       return view('index',['products'=>array_unique($prods)]);
    
    }
}
