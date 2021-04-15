<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\ProductLink;
use App\Models\ProductType;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Country;


class ProductController extends Controller
{

    public function productResearch()
    {
    	$productDetails = ProductDetail::paginate(10);;
    	
        return view('freelancer.product-research', compact('productDetails'));
    }
    
    public function uploadPage()
    {
        $productDetails = ProductDetail::all();

        return view('freelancer.upload',compact($productDetails));
    }

    public function uploadProduct(Request $request)
    {
        
        dd($request->all());
    }
}
