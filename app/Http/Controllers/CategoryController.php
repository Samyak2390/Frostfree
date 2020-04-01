<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

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
}
