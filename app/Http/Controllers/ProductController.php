<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Image;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();

        return view('admin.product.add-product',[
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    protected function createProductImage($request){
        $productImg = $request->file('product_image');
        $imgName = $productImg->getClientOriginalName();
        $directory = 'productimages/';
        $imgFile = $directory.$imgName;
        //$productImg->move($directory,$imgName);

        Image::make($productImg)->resize(200,200)->save($imgFile);
        return $imgFile;
    }

    protected function productSaveInfo($request,$imgFile){
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imgFile;
        $product->publication_status = $request->publication_status;
        $product->save();
    }

    public function newProduct(Request $request){

        $imgFile = $this->createProductImage($request);
        $this->productSaveInfo($request, $imgFile);

        return redirect('/product/add')->with('message','Product inserted successfully.');
    }

    public function manageProduct(){
        $products = DB::table('products')
                    ->join('categories','products.category_id','=','categories.id')
                    ->join('brands','products.brand_id','=','brands.id')
                    ->select('products.*','categories.category_name','brands.brand_name')
                    ->get();

        return view('admin.product.manage-product',['products'=>$products]);
    }

    public function editProduct($id){
        $product = Product::find($id);
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();

        return view('admin.product.edit-product',[
            'product'=>$product,
            'categories'=>$categories,
            'brands'=>$brands,
        ]);
    }

    public function updateProduct(Request $request){
        $product = Product::find($request->product_id);
        $productImg = $request->file('product_image');

        if ($productImg){
            unlink($product->product_image);
            $imgName = $productImg->getClientOriginalName();
            $directory = 'productimages/';
            $imgFile = $directory.$imgName;

            Image::make($productImg)->resize(200,200)->save($imgFile);

            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->product_name = $request->product_name;
            $product->product_price = $request->product_price;
            $product->product_quantity = $request->product_quantity;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->product_image = $imgFile;
            $product->publication_status = $request->publication_status;
            $product->save();
        }

        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->publication_status = $request->publication_status;

        $product->save();

        return redirect('/product/manage')->with('message','Category info updated successfully');
    }

    public function unpublisedProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status=0;
        $product->save();

        return redirect()->back();
    }

    public function publisedProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status=1;
        $product->save();

        return redirect()->back();
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product)
        {
            unlink($product->product_image);
        }
        $product->delete();

        return redirect('/product/manage')->with('message','Product Deleted');
    }
}
