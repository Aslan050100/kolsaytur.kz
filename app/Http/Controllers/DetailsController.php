<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
class DetailsController extends Controller
{
    //
    public function index($id){
    	//dd($id);
    	$product = Product::where('id',$id)->first();
    	$comforts = $product->comforts;
        $rooms = $product->rooms;
        //dd($rooms->load('room_types'));
        //$room_types = $rooms->room_types[0]['name'];
        //dd($room_types);
        //dd($product->rooms[0]['name']);
    	return view('details',['product'=>$product,'comforts'=>$comforts,'rooms'=>$rooms]);
    }

    public function addOrder(Request $req,$pro_id){
    	//dd($id);
    	$order = new Order;
    	$order->product_id = $id;
    	$order->check_in = $req->input('checkin');
    	$order->check_out = $req->input('checkout');
    	$order->name = $req->input('name');
    	$order->email = $req->input('email');
    	$order->phone_number = $req->input('phone');
    	$order->adults = $req->get('adults');
    	$order->children = $req->get('children');
    	$order->room_type = $req->get('room_type');
    	$order->save();
    	return redirect()->back()->with('alert', 'Data inserted!');
    }
}
