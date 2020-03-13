<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use App\Room;
use App\Room_type;
use Illuminate\Http\Request;

class ProductImageAdminController extends Controller
{
    //
    public function index(){
        $product_images = ProductImage::paginate(15);
        return view('admin.product_image',['product_images'=>$product_images]);

    }
    public function create()
    {
        $products = Product::all();
        return view('admin.product_image_create',['products'=>$products]);
    }

    public function store(Request $req){
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
        $product_image = new ProductImage;
        $product_image->pro_id = $req->product;
        $product_image->image = $path . $profileImage;
        $product_image->save();

        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
        $products = Product::all();
        $product_image = ProductImage::find($id);
        $pro_name = Product::find($product_image->pro_id);
        return view('admin.product_image_edit',['products'=>$products,'product_image'=>$product_image,'pro_name'=>$pro_name->name]);
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
            $product_image = ProductImage::find($id);
            $product_image->pro_id = $req->product;
            $product_image->save();
            return redirect()->back()->with('alert', 'Data updated!');
        }
        else{
            $product_image = ProductImage::find($id);
            $product_image->pro_id = $req->product;
            $product_image->image = $path . $profileImage;
            $product_image->save();
            return redirect()->back()->with('alert', 'Data updated!');
        }
    }
    public function destroy($id){
        $product_image = ProductImage::find($id);
        $product_image->delete();
        return redirect()->back()->with('Product deleted');

    }
}
