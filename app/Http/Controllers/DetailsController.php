<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Room_type;
use App\Room;
use App\Order;
use App\Ip;
class DetailsController extends Controller
{
    //
    public function index(Request $request,$id){
    	//$client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $client_ip = $_SERVER['REMOTE_ADDR'];
        $qwe = Ip::where('pro_id',$id)->first();
        if(is_null($qwe)){
            $ip = new Ip;
            $ip->pro_id = $id;
            $ip->ip = $client_ip;
            $ip->save();
            $visit = Product::where('id',$id)->first();
            $new_visit = $visit['visit']+1;
            $pro  = Product::find($id);
            if($pro){
                $pro->visit = $new_visit;
                $pro->save();
            }
        }
    	$product = Product::where('id',$id)->first();
    	$comforts = $product->comforts;
        $rooms = $product->rooms;
        return view('details',['product'=>$product,'comforts'=>$comforts,'rooms'=>$rooms]);
    }

    public function addOrder(Request $req,$pro_id){
    	//dd($pro_id);
    	$order = new Order;
    	$order->product_id = $pro_id;
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
//Api
    //http://localhost/kolsaytur.kz/public/api/addOrder1/1?checkin=1/16/2020&checkout=1/16/2020&name=aslan&email=Aslan@qweq&phone=87089429592&adults=1&children=1&room_type=lux 
    public function addOrder1(Request $req,$pro_id){
        $order = new Order;
        $order->product_id = $pro_id;
        $order->check_in = $req->input('checkin');
        $order->check_out = $req->input('checkout');
        $order->name = $req->input('name');
        $order->email = $req->input('email');
        $order->phone_number = $req->input('phone');
        $order->adults = $req->get('adults');
        $order->children = $req->get('children');
        $order->room_type = $req->get('room_type');
        $order->save();
        return 'Data inserted';
    }


    public function getProductByid($id){
        $product = Product::where('id',$id)->first();
        return $product;
    }

    public function getComfortsByid($id){
        $product = Product::where('id',$id)->first();
        $comforts = $product->comforts;
        return $comforts;
    }

    public function getRoomsByid($id){
        $product = Product::with('rooms')->where('id',$id)->first();
        $rooms = $product->rooms;
        return $rooms;
    }
    public function getRoom_typesByid(Request $req,$id){
        $rooms = $this->getRoomsByid($id);
        $room_types =[];
        for($i=0; $i <=count($rooms)-1; $i++){
            array_push($room_types,$rooms[$i]->room_types); 
        }
        return $rooms;
    }
    public function getRoom_types(){
        $room_types = Room_type::get();
        return $room_types;
    }
}
