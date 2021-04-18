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
use Illuminate\Support\Facades\Storage;



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

        if(!empty($request->gif1)){
            $request->file('gif1')->store('gifs');  
            $gifFileName1 = $request->gif1->hashName();

        }
        if(!empty($request->gif2)){
            $request->file('gif2')->store('gifs');  
            $gifFileName2 = $request->gif2->hashName();
 
        }
        if(!empty($request->gif3)){
            $request->file('gif3')->store('gifs');  
            $gifFileName3 = $request->gif3->hashName();

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

        if (is_array($gender)) {
            $gender = implode(',', $gender);
        }

        // echo $gender."<br>";

        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }

        // echo $category."<br>";


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
        'img1' => 'required_without_all:img2,img3,img4,img5',
        'img2' => 'required_without_all:img3,img4,img5',
        'img3' => 'required_without_all:img4,img5',
        'img4' => 'required_without_all:img1,img3,img5',
        'img5' => 'required_without_all:img1,img2,img3',
        'competitor1' => 'required',
        'competitor2' => 'required',
        'competitor3' => 'required',
        'competitor4' => 'required',
        'competitor5' => 'required',
        'amazon' => 'required',
        'ebay' => 'required',
        'allvideo' => 'required',
        'tag' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'category' => 'required',
        'country' => 'required',
        'desc' => 'required',
        'video'=> 'required',
        'gif1' => 'required_without_all:gif2,gif3',
        'gif2' => 'required_without_all:gif1,gif3',
        'gif3' => 'required_without_all:gif1,gif2',
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
        $productDetails->gender  = $gender;
        $productDetails->country = $request->input('country');
        $productDetails->category = $category;
        $productDetails->description = $request->input('desc');
        $productDetails->status = $request->input('status');
        $productDetails->product_type_id = $request->input('type');
        $productDetails->opportunity_level  = $opportunity;
        $productDetails->user_id  = auth()->id();
        $productDetails->uploader_name = $request->input('uploadername');
        $productDetails->save();

        $productLinks = new ProductLink;
        $productLinks->aliexpress = $request->input('aliexpress');
        $productLinks->ebay = $request->input('ebay');
        $productLinks->google_trend = $request->input('google');
        $productLinks->facebook_ad = $request->input('fbadd');
        $productLinks->competitor_link_1 = $request->input('competitor1');
        $productLinks->competitor_link_2 = $request->input('competitor2');
        $productLinks->competitor_link_3 = $request->input('competitor2');
        $productLinks->competitor_link_4 = $request->input('competitor2');
        $productLinks->competitor_link_5 = $request->input('competitor2');

        $productDetails->productLink()->save($productLinks);

        $productImage = new ProductImage;
        $productImage->image_link_1 = $request->input('img1');
        $productImage->image_link_2 = $request->input('img2');
        $productImage->image_link_3 = $request->input('img3');
        $productImage->image_link_4 = $request->input('img4');
        $productImage->image_link_5 = $request->input('img5');
        $productImage->video_link = $request->input('video');
        if (!empty($gifFileName)) {
            $productImage->gif_1 = $gifFileName1;
        }
        if (!empty($gifFileName2)) {
            $productImage->gif_2 = $gifFileName2;
        }
        if (!empty($gifFileName3)) {
        $productImage->gif_3 = $gifFileName3;
        }

        $productDetails->productImage()->save($productImage);

        return back()->with('status', 'Data inserted Successfully!');
    }
}
