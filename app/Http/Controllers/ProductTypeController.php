<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\City;
use App\Comfort;

class ProductTypeController extends Controller
{
    //
    public function index(){
   		$product_types = Product_type::paginate(15);
   		//dd($products);
   		return view('admin.product_type',['product_types'=>$product_types]);

   	}
   	public function create()
    {
        return view('admin.product_type_create');
    }
    
    public function store(Request $req){
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
     	$product_type = new Product_type;
    	$product_type->name = $req->name;
    	$product_type->description = $req->desc;
    	$product_type->slug = $slug;
    	$product_type->save();
    	return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
    	$product_type = Product_type::find($id);
    	return view('admin.product_type_edit',['product_type'=>$product_type]);
    }
    public function update(Request $req,$id){
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
    	$product_type = Product_type::find($id);
    	$product_type->name = $req->name;
    	$product_type->description = $req->desc;
    	$product_type->slug = $slug;
    	$product_type->save();
    	return redirect()->back()->with('alert', 'Data updated!');
    }
    public function destroy($id){
    	$product_type = Product_type::find($id);
    	$product_type->delete();
    	return redirect()->back()->with('Product deleted');
    	
    }
}
