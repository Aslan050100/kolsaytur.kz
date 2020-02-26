<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\City;
use App\Room;
use App\Comfort;
use App\Room_type;
use App\Pro_com;

class RoomController extends Controller
{
    //
    public function index(){
   		$rooms = Room::paginate(15);
   		return view('admin.room',['rooms'=>$rooms]);

   	}
   	public function create()
    {
    	$room_types = Room_type::all();
    	$products = Product::all();
        return view('admin.room_create',['room_types'=>$room_types,'products'=>$products]);
    }

    public function store(Request $req){
    	//dd($req);
    	request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
    	if ($files = $req->file('image')) {
           $destinationPath = 'assets/images';  	// upload path
            $path = 'https://sirius.onmonday.kz/assets/images/';
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
        }
     	$room = new Room;
    	$room->name = $req->name;
    	$room->price = $req->price;
    	$room->room_type_id = $req->room_type;
    	$room->pro_id = $req->product;
    	$room->quantity = $req->quantity;
    	$room->children = $req->children;
    	$room->animal = $req->animal;
    	$room->smoke = $req->smoke;
    	$room->image = $path . $profileImage;
    	$room->save();

    	return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
    	$room_types = Room_type::all();
    	$products = Product::all();
    	$room = Room::find($id);
    	$product = Product::find($room->pro_id);
    	$pro_name = $product->name;
    	$room_type = Room_type::find($room->room_type_id);
    	$room_type_name = $room_type->name;

    	return view('admin.room_edit',['room'=>$room,'room_types'=>$room_types,'products'=>$products,'pro_name'=>$pro_name,'room_type_name'=>$room_type_name]);
    }
    public function update(Request $req,$id){

    	if ($files = $req->file('image')) {
    		//dd(123);
           $destinationPath = 'assets/images';  	// upload path
            $path = 'https://sirius.onmonday.kz/assets/images/';
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
        }

        if($req->file('image') == null){
        	//dd(123);
        	$room = Room::find($id);
	     	//dd($room);
	    	$room->name = $req->name;
	    	$room->price = $req->price;
	    	$room->room_type_id = $req->room_type;
	    	$room->pro_id = $req->product;
	    	$room->quantity = $req->quantity;
	    	$room->children = $req->children;
	    	$room->animal = $req->animal;
	    	$room->smoke = $req->smoke;

	    	$room->save();
	    	return redirect()->back()->with('alert', 'Data updated!');
	        }
        else{
        	$room = Room::find($id);
	     	//dd($room);
	    	$room->name = $req->name;
	    	$room->price = $req->price;
	    	$room->room_type_id = $req->room_type;
	    	$room->pro_id = $req->product;
	    	$room->quantity = $req->quantity;
	    	$room->children = $req->children;
	    	$room->animal = $req->animal;
	    	$room->smoke = $req->smoke;
	    	$room->image = $path . $profileImage;
	    	$room->save();
	    	return redirect()->back()->with('alert', 'Data updated!');
	    }
    }
    public function destroy($id){
    	$room = Room::find($id);
    	$room->delete();
    	return redirect()->back()->with('Product deleted');

    }
}
