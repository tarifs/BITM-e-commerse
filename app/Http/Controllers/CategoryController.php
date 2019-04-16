<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
//use DB;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.new-category');
    }

    public function manageCategory(Request $request){
        $categories = Category::all();
        return view('admin.category.arrange-category',['categories'=>$categories]);
    }

    public function saveCategory(Request $request){
        //FIRST METHOD
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

//        SECEND METHOD
//        Category::create($request->all());

        // THIRD METHOD
//        DB::table('categories')->insert([
//           'category_name' => $request->category_name,
//           'category_description' => $request->category_description,
//           'publication_status' => $request->publication_status
//        ]);

        return redirect('/new/category')->with('message','Category inserted successfully.');
    }

    public function unpublisedCategory($id){
       $category = Category::find($id);
       $category->publication_status = 0;
       $category->save();

       return redirect('/arrange/category');
    }

    public function publisedCategory($id){
       $category = Category::find($id);
       $category->publication_status = 1;
       $category->save();

       return redirect('/arrange/category');
    }

    public function editCategory($id){
        $category = Category::find($id);
       return view('admin.category.edit-category',['category'=>$category]);
    }

    public function updateCategory(Request $request){
        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('/arrange/category')->with('message','Category info updated successfully');
    }

    public function deleteCategory($id){
        $category = Category::find($id);

        $category->delete();

        return redirect('/arrange/category')->with('message','Category info deleted successfully');
    }

}
