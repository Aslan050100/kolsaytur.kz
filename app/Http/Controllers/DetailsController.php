<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\RoomType as RoomTypeResource;

use App\Product;
use App\Room_type;
use App\Room;
use App\Order;
use App\Ip;
class DetailsController extends Controller
{
//Api
    public function addOrder1(Request $request){
        $order = new Order;
        $order->product_id = $request->get('pro_id');
        $order->check_in = $request->input('checkin');
        $order->check_out = $request->input('checkout');
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone_number = $request->input('phone');
        $order->adults = $request->get('adults');
        $order->room_id = $request->get('room_id');
        $order->save();
        return "Order inserted";
    }


    public function getProductByid($id){
        $product = Product::where('id',$id)->first();
        return new ProductResource($product);
    }
    public function getRoom_types(){
        $room_types = Room_type::get();
        return RoomTypeResource::collection($room_types);
    }
    public function checkIp($id){
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
        return 'Changed';
    }
}
