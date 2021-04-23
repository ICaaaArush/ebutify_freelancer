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
use Illuminate\Support\Collection;
use Illuminate\Support\Str;



class ProductController extends Controller
{

    public function productResearch()
    {
        $user_id = auth()->id();

    	$collections = ProductDetail::where('user_id', $user_id)->get();

        // foreach ($collections as $collection) {

        //     foreach($collection->productImage as $productImage){
        //         dd($productImage->image_link_1);
        //     }

        // }
        // exit();

        $productDetails = $collections->sortByDesc('created_at');

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
            $request->file('gif1')->store('public');  
            $gifFileName1 = $request->gif1->hashName();
            // dd($gifFileName1);

        }
        if(!empty($request->gif2)){
            $request->file('gif2')->store('public');  
            $gifFileName2 = $request->gif2->hashName();
 
        }
        if(!empty($request->gif3)){
            $request->file('gif3')->store('public');  
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
        'img1' => 'required|active_url',
        'img2' => 'required|active_url',
        'img3' => 'required|active_url',
        'img4' => 'nullable|active_url',
        'img5' => 'nullable|active_url',
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
        $productDetails->tag = $request->input('tag');
        $productDetails->opportunity_level  = $opportunity;
        $productDetails->user_id  = auth()->id();
        $productDetails->uploader_name = $request->input('uploadername');
        $productDetails->save();

        $productLinks = new ProductLink;
        $productLinks->aliexpress = $request->input('aliexpress');
        $productLinks->ebay = $request->input('ebay');
        $productLinks->google_trend = $request->input('google');
        $productLinks->facebook_ad = $request->input('fbadd');
        $productLinks->youtube = $request->input('youtube');
        $productLinks->shopify = $request->input('shopify');
        $productLinks->amazon = $request->input('amazon');
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
        if (!empty($gifFileName1)) {
            $productImage->gif_1 = $gifFileName1;
        }
        if (!empty($gifFileName2)) {
            $productImage->gif_2 = $gifFileName2;
        }
        if (!empty($gifFileName3)) {
        $productImage->gif_3 = $gifFileName3;
        }

        $productDetails->productImage()->save($productImage);

        return back()->with('status', 'Product Uploaded Successfully!');
    }

    public function productEdit($id)
    {

        $productDetails = ProductDetail::find($id);
        // dd($productDetails);

        $productImages = ProductImage::firstWhere('product_detail_id', $id);
        // dd($productImages);
        
        $productLinks = ProductLink::firstWhere('product_detail_id', $id);
        // dd($productLinks, $productImages);

        return view('freelancer.edit-product', compact('id', 'productDetails', 'productLinks', 'productImages'));
    }

    public function productUpdate(Request $request)
    {
        if ($request->type == 'Saturated' ) {
            $type_id = 1;
        }else{
            $type_id = 2;
        }

        if(!empty($request->gif1)){
            $request->file('gif1')->store('public');  
            $gifFileName1 = $request->gif1->hashName();
            // dd($gifFileName1);

        }
        if(!empty($request->gif2)){
            $request->file('gif2')->store('public');  
            $gifFileName2 = $request->gif2->hashName();
 
        }
        if(!empty($request->gif3)){
            $request->file('gif3')->store('public');  
            $gifFileName3 = $request->gif3->hashName();

        }

        $validatedData = $request->validate([
        'pname' => 'required|max:255',
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
        'img1' => 'required|active_url',
        'img2' => 'required|active_url',
        'img3' => 'required|active_url',
        'img4' => 'nullable|active_url',
        'img5' => 'nullable|active_url',
        'competitor1' => 'required',
        'competitor2' => 'required',
        'competitor3' => 'required',
        'competitor4' => 'required',
        'competitor5' => 'required',
        'amazon' => 'required',
        'ebay' => 'required',
        // 'allvideo' => 'required',
        'tag' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'category' => 'required',
        'country' => 'required',
        'desc' => 'required',
        'video'=> 'required',
        // 'gif1' => 'required_without_all:gif2,gif3',
        // 'gif2' => 'required_without_all:gif1,gif3',
        // 'gif3' => 'required_without_all:gif1,gif2',
    ]);

        $productDetails = ProductDetail::find($request->id);
        $productDetails->product_name = $request->input('pname');        
        $productDetails->price = $request->input('price');
        $productDetails->cost = $request->input('cost');
        $productDetails->profit = $request->input('profit');
        $productDetails->total_order = $request->input('torder');
        $productDetails->total_revenue = $request->input('trevinue');
        $productDetails->alexa_rank = $request->input('alexarank');
        $productDetails->age = $request->input('age');
        $productDetails->gender  = $request->input('gender');
        $productDetails->country = $request->input('country');
        $productDetails->category = $request->input('category');
        $productDetails->description = $request->input('desc');
        $productDetails->status = $request->input('status');
        $productDetails->product_type_id = $type_id;
        $productDetails->opportunity_level  = $request->input('opportunity');
        $productDetails->user_id  = auth()->id();
        $productDetails->tag = $request->input('tag');
        $productDetails->uploader_name = $request->input('uploadername');
        $productDetails->save();

        $productLinks = ProductLink::find($request->productImagesId);
        $productLinks->aliexpress = $request->input('aliexpress');
        $productLinks->ebay = $request->input('ebay');
        $productLinks->google_trend = $request->input('google');
        $productLinks->facebook_ad = $request->input('fbadd');
        $productLinks->youtube = $request->input('youtube');
        $productLinks->shopify = $request->input('shopify');
        $productLinks->competitor_link_1 = $request->input('competitor1');
        $productLinks->competitor_link_2 = $request->input('competitor2');
        $productLinks->competitor_link_3 = $request->input('competitor2');
        $productLinks->competitor_link_4 = $request->input('competitor2');
        $productLinks->competitor_link_5 = $request->input('competitor2');
        $productLinks->amazon = $request->input('amazon');


        $productDetails->productLink()->save($productLinks);

        $productImage = ProductImage::find($request->productLinksId);
        $productImage->image_link_1 = $request->input('img1');
        $productImage->image_link_2 = $request->input('img2');
        $productImage->image_link_3 = $request->input('img3');
        $productImage->image_link_4 = $request->input('img4');
        $productImage->image_link_5 = $request->input('img5');
        $productImage->video_link = $request->input('video');

        if (!empty($gifFileName1)) {
            $productImage->gif_1 = $gifFileName1;
        }
        if (!empty($gifFileName2)) {
            $productImage->gif_2 = $gifFileName2;
        }
        if (!empty($gifFileName3)) {
        $productImage->gif_3 = $gifFileName3;
        }

        $productDetails->productImage()->save($productImage);

        return back()->with('status', 'Product Updated Successfully!');
    }
}
