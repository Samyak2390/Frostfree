<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index(){
        $menu_active=0;
        $categories=Category::all();
        return view('trader.category.index',compact('menu_active','categories'));
    }

    public function create()
    {
        $menu_active=2;
        return view('trader.category.create',compact('menu_active'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'category_name' => 'required|max:255|unique:categories'
        ]);
        $data = $request->all();

        Category::create($data);
        return redirect('/trader/category')->with('message','Categroy Added Successfylly!');
    }

    public function edit($id)
    {
        $menu_active=0;
        $edit_category=Category::findOrFail($id);
        return view('trader.category.edit',compact('edit_category','menu_active'));
    }

    public function update(Request $request, $id)
    {
        $update_categories=Category::findOrFail($id);
        $this->validate($request,[
            'category_name'=>'required|max:255'
        ]);
        $input_data=$request->all();
        if(empty($input_data['status'])){
            $input_data['status']=0;
        }

        $update_categories->update($input_data);
        return redirect('/trader/category')->with('message','Category Updated!');
    }

    public function destroy($id){
        $delete=Category::findOrFail($id);
        $delete->delete();
        return redirect('/trader/category')->with('message','Category Deleted!');
    }

    public function show($id){
        $parallax = "";
        $validCategory = Category::findOrFail($id);
        $category = $validCategory->category_name;
        $category = strtolower($category);
        $categories = Category::all();
        // dd($category == 'green groceries');
        if($category == 'green groceries'){
            $parallax = 'greengrocer.jpeg';
        }else if($category == 'fish'){
            $parallax = 'fishmonger.jpg';
        }else if($category == 'bakery'){
            $parallax = 'bakery.jpg';
        }else if($category == 'delicacy'){
            $parallax = 'delicatessen.jpg';
        }else if($category == 'meat'){
            $parallax = 'butcher.jpg';
        }else{
            $parallax = 'bakery.jpg';
        }

        $recentlyAdded = DB::table('products')->latest()->take(5)->get();
        // $products = DB::table('products')->where('category_id', $id)->get();

        //Sorting products 
        if(isset($_GET['orderby'])){
            $orderBy = $_GET['orderby'];
            switch($orderBy){
                case 'price':
                    //low to high 
                    $products = DB::table('products')->where('category_id', $id)->orderBy('price')->get();
                    break;

                case 'price-desc': 
                    //high to low
                    $products = DB::table('products')->where('category_id', $id)->orderBy('price', 'desc')->get();
                    break;

                case 'date': 
                    $products = DB::table('products')->where('category_id', $id)->orderBy('updated_at', 'desc')->get();
                    break;

                default:
                    $products = DB::table('products')->where('category_id', $id)->get();
            }
        }else{
            $products = DB::table('products')->where('category_id', $id)->get();
        }
        return view('category', compact('id', 'products', 'categories', 'recentlyAdded', 'parallax', 'category'));
    }
}
