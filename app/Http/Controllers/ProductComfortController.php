<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Product_type;
use App\City;
use App\Comfort;
use App\Pro_com;

class ProductComfortController extends Controller
{
    //
    public function index(){
   		$pro_coms = Pro_com::paginate(15);
   		//dd($products);
   		return view('admin.pro_com',['pro_coms'=>$pro_coms]);

   	}
   	public function create()
    {
    	$products = Product::all();
    	$comforts = Comfort::all();
        return view('admin.pro_com_create',['products'=>$products,'comforts'=>$comforts]);
    }
    
    public function store(Request $req){
    	
     	$pro_com = new Pro_com;
    	$pro_com->pro_id = $req->product_id;
    	$pro_com->com_id = $req->comfort_id;
    	$pro_com->save();
    	return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function destroy($pro_id,$com_id){
    	$pro_com = Pro_com::where('pro_id',$pro_id)->where('com_id',$com_id);
    	$pro_com->delete();
    	return redirect()->back()->with('Product deleted');
    	
    }
}
