<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Shop;
use App\Product;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $menu_active=3;
        $i=0;
        //get products from shop of logged in trader
        $shop_id = User::find(auth()->id())->shop->id;
        $products=Shop::find($shop_id)->products->sortByDesc('created_at');
        return view('trader.product.index',compact('menu_active','products','i'));
    }

    public function create(){
        $menu_active = 3;
        $categories = Category::where('status', '1')->pluck('id', 'category_name')->all();
        $shop_id = Shop::where('user_id', auth()->id())->pluck('id')->all()[0];
        return view('trader.product.create', compact('menu_active','categories', 'shop_id'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'product_name'=> 'required|min:3',
            'stock_quantity'=>'required|numeric|min:1',
            'price'=>'required|numeric|min:1',
            'discount'=>'nullable|numeric|min:1|max:100',
            'min_order'=>'required|numeric|min:1|max:100',
            'max_order'=>'required|numeric|min:1|max:100',
            'description'=>'required',
            'allergy_info'=>'',
            'product_image'=>'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);

        $formInput = $request->except(['discount']);
        if($request->file('product_image')){
            $image=$request->file('product_image');
            if($image->isValid()){
                $fileName=time().'-'.Str::slug($formInput['product_name'],"-").'.'.$image->getClientOriginalExtension();
                $filePath = public_path('uploads/products/'.$fileName);

                //Resize Image
                Image::make($image)->resize(300, 350)->save($filePath);
                $formInput['product_image'] = $fileName;
            }

        }
        
        Product::create($formInput);
        return redirect()->route('product.index')->with('message', 'Product Added Successfully!');
    }
}
