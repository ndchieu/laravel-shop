<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;

class ShopController extends Controller
{

    public function index(){
        $categories = ProductCategory::with('products')->get();
        return view('website.frontend.layouts.shop',compact('categories'));

    }

    public function detail($id){
        $product = Product::find($id)->with('productImage')->first();
        // dd($product);
        return view('website.frontend.layouts.product_details',compact('product'));
    }

}
