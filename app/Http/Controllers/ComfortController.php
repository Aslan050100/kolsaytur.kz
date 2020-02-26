<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\City;
use App\Comfort;
use Validator,Redirect,Response,File;
use Intervention\Image\ImageManagerStatic as Image;

class ComfortController extends Controller
{
    //
    public function index(){
   		$comforts = Comfort::paginate(15);
   		//dd($products);
   		return view('admin.comfort',['comforts'=>$comforts]);

   	}
   	public function create()
    {
        return view('admin.comfort_create');
    }

    public function store(Request $req){
    	//dd($req);
    	request()->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
    	//dd($req->file('icon'));
    	if ($files = $req->file('icon')) {
           $destinationPath = 'assets/images';  	// upload path
            $path = 'https://sirius.onmonday.kz/assets/images/';
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['icon'] = "$profileImage";
        }
        //$icon_name = $req->file('icon')->getClientOriginalName();
     	$comfort = new Comfort;
    	$comfort->name = $req->name;
    	$comfort->description = $req->desc;
    	$comfort->icon = $path . $profileImage;
    	$comfort->save();
    	return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
    	$comfort = Comfort::find($id);
    	return view('admin.comfort_edit',['comfort'=>$comfort]);
    }
    public function update(Request $req,$id){
    	if ($files = $req->file('icon')) {
           $destinationPath = 'assets/images';    // upload path
            $path = 'https://sirius.onmonday.kz/assets/images/';
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['icon'] = "$profileImage";
        }
        if($req->file('icon') == null){

          $comfort = Comfort::find($id);
          $comfort->name = $req->name;
          $comfort->description = $req->desc;
          $comfort->save();
          return redirect()->back()->with('alert', 'Data updated!');
        }
        else{
          dd(123);
          $comfort = Comfort::find($id);
          $comfort->name = $req->name;
          $comfort->description = $req->desc;
          $comfort->icon = $path . $profileImage;
          $comfort->save();
          return redirect()->back()->with('alert', 'Data updated!');
        }

    }
    public function destroy($id){
    	$comfort = Comfort::find($id);
    	$comfort->delete();
    	return redirect()->back()->with('Product deleted');

    }
}
