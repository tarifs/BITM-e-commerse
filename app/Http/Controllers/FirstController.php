<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
        $productViews = Product::where('publication_status',1)
                        ->orderBy('id','DESC')
                        ->take(3)
                        ->get();
        return view('forntEnd.home.home',[
            'productViews'=>$productViews
        ]);
    }

    public function about(){
        return view('forntEnd.about.about');
    }

    public function categoryProduct($id){
        $categoryProducts = Product::where('category_id',$id)
                            ->where('publication_status',1)
                            ->get();

        return view('forntEnd.category.category-product',[
            'categoryProducts'=>$categoryProducts
        ]);
    }

    public function bakeryProduct(){
        return view('forntEnd.kitchen.bakeryProduct');
    }
    public function kitchenDiningProduct(){
        return view('forntEnd.household.kitchenDiningProduct');
    }
    public function faqs(){
        return view('forntEnd.faqs.faqs');
    }
    public function contact(){
        return view('forntEnd.contact.contact');
    }
}
