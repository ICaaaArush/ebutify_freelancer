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

        return view('freelancer.upload',compact('productDetails'));
    }

    public function uploadProduct(Request $request)
    {
        // dd($request->all());
        if(!empty($request->file)){
            $path = $request->file('gif')->store('gifs');
            return $path;
         }
        
        $opportunity = $request->opportunity;

        if (is_array($opportunity)) {
            $opportunity = implode(',', $opportunity);
        }
        
        // echo $opportunity."<br>";

        
        $age = $request->age;
            
        if (is_array($age)) {
            $age = implode(',', $age);
        }
        
        // echo $age."<br>";

        $gender = $request->gender;

        if (is_array($age)) {
        $gender = implode(',', $gender);
        }

        // echo $gender."<br>";

        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }



        $validatedData = $request->validate([
        'pname' => 'required|unique:product_details,product_name|max:255',
        'cost' => 'required',
        'profit' => 'required',
        'torder' => 'required',
        'trevinue' => 'required',
        'alexarank' => 'required',
        'opportunity' => 'required',
        'aliexpress' => 'required',
        'fbadd' => 'required',
        'google' => 'required',
        'youtube' => 'required',
        'shopify' => 'required',
        'aliexpressImng1' => 'required',
        'aliexpressImng2' => 'required',
        'aliexpressImng3' => 'required',
        'aliexpressImng3' => 'required',
        'aliexpressImng3' => 'required',
        'competitor1' => 'required',
        'competitor1' => 'required',
        'competitor1' => 'required',
        'competitor1' => 'required',
        'competitor1' => 'required',
        'amazon' => 'required',
        'ebay' => 'required',
        'allvideo' => 'required',
        'tag' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'category' => 'required',
        'country' => 'required',
        'desc' => 'required',
        'gif' => 'required',
    ]);

        $productDetails = new ProductDetail;
        $productDetails->product_name = $request->input('pname');        
        $productDetails->price = $request->input('price');
        $productDetails->cost = $request->input('cost');
        $productDetails->profit = $request->input('profit');
        $productDetails->total_order = $request->input('torder');
        $productDetails->total_revenue = $request->input('trevinue');
        $productDetails->alexa_rank = $request->input('alexarank');
        $productDetails->age = $age;
        // $productDetails->gender_id  = $request->input('gender');
        $productDetails->country = $request->input('country');
        $productDetails->category = $category;
        $productDetails->description = $request->input('desc');
        $productDetails->status = $request->input('status');
        // $productDetails->opportunity_level_id  = $request->input('opportunity');
        $productDetails->user_id  = auth()->id();
        $productDetails->uploader_name = $request->input('uploadername');
        $productDetails->created_at = date("Y/m/d");
        $productDetails->updated_at = date("Y/m/d");
        $productDetails->save();
    }
}
