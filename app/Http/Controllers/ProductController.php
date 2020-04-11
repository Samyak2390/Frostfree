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
use Illuminate\Support\Facades\DB;

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

        $discount = $request->input('discount', 0);
        
        $product = Product::create($formInput);
        
        if($discount > 0){
            $product->discount()->create([
                'discount' => $discount
            ]);
        }
        
        return redirect()->route('product.index')->with('message', 'Product Added Successfully!');
    }

    public function edit($product_id){
        $menu_active = 3;
        //get shop_id for currently logged in user
        $shop_id1 = User::find(auth()->id())->shop->id;

        //get shop_id from the given product id
        $shop_id2 = Product::findOrFail($product_id)->shop->id;

        //if that $shop_id matches with the shop_id for the product, then only editing is allowed
        if($shop_id1 == $shop_id2){
            $product = Product::findOrFail($product_id);
            $categories = Category::where('status', '1')->pluck('id', 'category_name')->all();
            return view('trader.product.edit', compact('menu_active','product', 'categories'));
        }else{
            return view('errors.check-role');
        }
        
    }

    public function deleteImage($id){
        $product=Product::findOrFail($id);
        $imagePath =public_path().'/uploads/products/'.$product->product_image;
        if($product){
            $product->product_image='';
            $product->save();
            //delete image 
            unlink($imagePath);
        }
        return back();
    }

    public function update(Request $request, $id){
        $product=Product::findOrFail($id);
        $this->validate($request,[
            'product_name'=> 'required|min:3',
            'stock_quantity'=>'required|numeric|min:1',
            'price'=>'required|numeric|min:1',
            'discount'=>'nullable|numeric|min:1|max:100',
            'min_order'=>'required|numeric|min:1|max:100',
            'max_order'=>'required|numeric|min:1|max:100',
            'description'=>'required',
            'allergy_info'=>'',
            'product_image'=>'image|mimes:png,jpg,jpeg|max:1000',
        ]);

        $formInput = $request->except(['discount']);
        if($product['product_image'] == ''){
            if($request->file('product_image')){
                $image=$request->file('product_image');
                if($image->isValid()){
                    $fileName=time().'-'.Str::slug($formInput['product_name'],"-").'.'.$image->getClientOriginalExtension();
                    $filePath = public_path('uploads/products/'.$fileName);
    
                    //Resize Image
                    Image::make($image)->resize(300, 350)->save($filePath);
                    $formInput['product_image'] = $fileName;
                }
            }else{
                $formInput['product_image'] = $product['product_image'];
            }
        }
        $discount = $request->input('discount', 0);

        $product->update($formInput);
        if($discount > 0){
            $productDiscount = DB::table('discounts')->where('product_id', $product->id)->get();

            if(sizeOf($productDiscount) ==1 ){
                $product->discount()->update([
                    'discount' => $discount
                ]);
            }else{
                $product->discount()->create([
                    'discount' => $discount
                ]);
            }
        }
        return redirect()->route('product.index')->with('message', 'Product Updated Successfylly!');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $image_path = public_path().'/uploads/products/'.$product->product_image;
        // dd($product->discount);
        if($product->discount){
            if($product->discount()->delete() && $product->delete()){
                unlink($image_path);
            }
        }else{
            if($product->delete()){
                unlink($image_path);
            }
        }
        return redirect()->route('product.index')->with('message','Product Deleted!');
    }

    public function show($id){
        $product = Product::findOrFail($id);

        //other products belonging to same category
        $relatedProducts = DB::table('products')->where('category_id', $product->category_id)->latest()->take(4)->get();
        return view('product-detail', compact('product', 'relatedProducts'));
    }
}
