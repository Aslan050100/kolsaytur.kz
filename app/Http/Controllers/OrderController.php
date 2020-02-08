<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\City;
use App\Comfort;
use App\Order;
use Validator,Redirect,Response,File;
use Intervention\Image\ImageManagerStatic as Image;


class OrderController extends Controller
{
    //
    public function index(){
   		$orders = Order::paginate(15);
   		//dd($products);
   		return view('admin.order',['orders'=>$orders]);

   	}
    public function destroy($id){
    	$order = Order::find($id);
    	$order->delete();
    	return redirect()->back()->with('Product deleted');
    	
    }
}
