<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BCategoryController extends Controller
{
    public function Categoryindex(){
        $category=Category::all();
        return view('admin.page.listCategory', compact('category'));
    }

    public function getAddCategory(){
        return view('admin.page.addCategory');
    }

    public function postAddCategory(Request $request){
        $category=new Category;
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->save();
        return redirect()->route('admin.category.index');
    }

    public function getEditCategory($category_id){
        $data['cate']=Category::find($category_id);
        return view('admin.page.editCategory',$data);
    }

    public function postEditCategory(Request $request,$category_id){
        $category=Category::find($category_id);
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->save();
        return redirect()->route('admin.category.index');
    }

    public function deleteCategory($category_id){
        $category=Category::find($category_id);
        $category->delete();
        return back();
    }
}
