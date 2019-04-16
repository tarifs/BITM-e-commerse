<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.new-brand');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
           'brand_name'=>'required|regex:/^[A-Za-z,-]+$/|min:5|max:10',
           'brand_description'=>'required',
           'publication_status'=>'required'
        ]);

        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();

        return redirect('/brand/add')->with('message','Brand inserted successfully.');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function manageBrand(Request $request)
    {
        $brands = Brand::all();

        return view('admin.brand.manage-brand',['brands'=>$brands]);
    }

    public function unpublisedBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 0;
        $brand->save();

        return redirect('/brand/manage');
    }

    public function publisedBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 1;
        $brand->save();

        return redirect('/brand/manage');
    }

    public function editBrand($id){
        $brand = Brand::find($id);
        return view('admin.brand.edit-brand',['brand'=>$brand]);
    }

    public function updateBrand(Request $request){
        $brand = Brand::find($request->id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();

        return redirect('/brand/manage')->with('message','Brand info updated successfully');
    }

    public function deleteBrand($id){
        $brand = Brand::find($id);

        $brand->delete();

        return redirect('/brand/manage')->with('message','Brand info deleted successfully');
    }
}
