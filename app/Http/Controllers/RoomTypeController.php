<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\City;
use App\Comfort;
use App\Room_type;

class RoomTypeController extends Controller
{
    //
     public function index(){
      $room_types = Room_type::paginate(15);
      //dd($products);
      return view('admin.room_type',['room_types'=>$room_types]);

    }
    public function create()
    {
        return view('admin.room_type_create');
    }
    
    public function store(Request $req){
      $room_type = new Room_type;
      $room_type->name = $req->name;
      $room_type->description = $req->desc;
      $room_type->save();
      return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
      $room_type = Room_type::find($id);
      return view('admin.room_type_edit',['room_type'=>$room_type]);
    }
    public function update(Request $req,$id){
      $room_type = Room_type::find($id);
      $room_type->name = $req->name;
      $room_type->description = $req->desc;
      $room_type->save();
      return redirect()->back()->with('alert', 'Data updated!');
    }
    public function destroy($id){
      $room_type = Room_type::find($id);
      $room_type->delete();
      return redirect()->back()->with('Product deleted');
      
    }
}
