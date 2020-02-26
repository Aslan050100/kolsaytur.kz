<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\City;

class ProductController extends Controller
{
    //
   	public function index(){
   		$products = Product::paginate(15);
   		//dd($products);
   		return view('admin.product',['products'=>$products]);

   	}
   	public function create()
    {
    	$pro_types = Product_type::get();
    	$cities = City::get();
    	//dd($pro_types);
        return view('admin.product_create',['pro_types'=>$pro_types,'cities'=>$cities]);
    }

    public function store(Request $req){
    	//dd($req->image);
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
        if ($files = $req->image) {
            //dd(123);
           $destinationPath = 'assets/images';      // upload path
            $path = 'https://sirius.onmonday.kz/assets/images/';
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
        }
    	$pro_type_id = Product_type::where('name',$req->product_type)->first();
    	$city_id = City::where('name',$req->city)->first();
    	$slug = $req->name;
    	$contains_cyrillic = (bool) preg_match('/[\p{Cyrillic}]/u', $slug);
    	$slug = preg_replace('/\s+/', '', $slug);
    	if($contains_cyrillic){
	    	$cyr = [
	            'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
	            'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
	            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
	            'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
	        ];
	        $lat = [
	            'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
	            'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
	            'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
	            'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya'
	        ];
	        $slug = str_replace($cyr,$lat, $slug);
	    }
    	//dd($req);
     	$product = new Product;
    	$product->name = $req->name;
    	$product->description = $req->desc;
    	$product->map = $req->map;
    	$product->product_type_id = $pro_type_id->id;
    	$product->city_id = $city_id->id;
    	$product->slug = $slug;
        $product->image = $path . $profileImage;
    	$product->save();
    	return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
    	$product = Product::where('id',$id)->first();
    	$pro_type = Product_type::where('id',$product->product_type_id)->first();
    	$city = City::where('id',$product->city_id)->first();
    	$pro_types = Product_type::get();
    	$cities = City::get();
    	return view('admin.product_edit',['product'=>$product,'pro_type'=>$pro_type,'city'=>$city,'pro_types'=>$pro_types,'cities'=>$cities]);
    }
    public function update(Request $req,$id){
    	//dd($req);

        $slug = $req->name;
        $contains_cyrillic = (bool) preg_match('/[\p{Cyrillic}]/u', $slug);
        $slug = preg_replace('/\s+/', '', $slug);
        if($contains_cyrillic){
            $cyr = [
                'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
                'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
                'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
                'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
            ];
            $lat = [
                'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
                'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
                'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
                'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya'
            ];
            $slug = str_replace($cyr,$lat, $slug);
        }
    	$pro_type_id = Product_type::where('name',$req->product_type)->first();
    	$city_id = City::where('name',$req->city)->first();
        if ($files = $req->file('image')) {
            //dd(123);
           $destinationPath = 'assets/images';      // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
        }
        if($req->file('image') == null){
        	$product = Product::find($id);
        	//dd($pro);
        	$product->name = $req->name;
        	$product->description = $req->desc;
        	$product->map = $req->map;
            $product->slug = $slug;
        	$product->product_type_id = $pro_type_id->id;
        	$product->city_id = $city_id->id;
        	$product->save();

    	    return redirect()->back()->with('alert', 'Data updated!');
        }
        else{
            $product = Product::find($id);
            //dd($pro);
            $product->name = $req->name;
            $product->description = $req->desc;
            $product->map = $req->map;
            $product->slug = $slug;
            $product->product_type_id = $pro_type_id->id;
            $product->city_id = $city_id->id;
            $product->image = $profileImage;
            $product->save();

            return redirect()->back()->with('alert', 'Data updated!');
        }
    }
    public function destroy($id){
    	$pro = Product::find($id);
    	$pro->delete();
    	return redirect()->back()->with('Product deleted');

    }

}
