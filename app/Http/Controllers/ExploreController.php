<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\ProductLink;
use App\Models\ProductType;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Country;
use ZipArchive;
use File;

class ExploreController extends Controller
{

    public function exploreAliProduct()
    {
        $user_id = auth()->id();

        $collections = ProductDetail::where('user_id', $user_id)
                                            ->where('explore_pro_type', 'LIKE' ,'%ali_express%')
                                            ->get();

        $productDetails = $collections->sortByDesc('created_at');

        return view('freelancer.explorer-ali-express', compact('productDetails'));
    }
    public function uploadAliPage()
    {
        $productDetails = ProductDetail::all();

        return view('freelancer.add-new-ali-ex',compact('productDetails'));
    }

    public function uploadAli(Request $request)
    {
        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }

        $validatedData = $request->validate([
        'pname' => 'required|unique:product_details,product_name|max:255',
        'ali_express_link' => 'required',
        'amz_link' => 'required',
        'img_link' => 'required',
        'price' => 'required',
        'star_rating' => 'required',
        't_review' => 'required',
        'category' => 'required'
        ]);

        $productDetails = new ProductDetail;
        $productDetails->product_name = $request->input('pname');
        $productDetails->price = $request->input('price');
        $productDetails->explore_t_review = $request->input('t_review');
        $productDetails->explore_star_rating = $request->input('star_rating');
        $productDetails->explore_pro_type = "ali_express";
        $productDetails->category = $category;
        $productDetails->product_type_id = $request->input('type');
        $productDetails->user_id  = auth()->id();
        $productDetails->uploader_name = $request->input('uploadername');
        $productDetails->save();

        $productLinks = new ProductLink;
        $productLinks->aliexpress = $request->input('ali_express_link');
        $productLinks->amazon = $request->input('amz_link');

        $productDetails->productLink()->save($productLinks);

        $productImage = new ProductImage;
        $productImage->image_link_1 = $request->input('img_link');

        $productDetails->productImage()->save($productImage);

        return back()->with('status', 'Product Uploaded Successfully!');
    }

    public function exploreAmazonProduct()
    {
        $user_id = auth()->id();

        $collections = ProductDetail::where('user_id', $user_id)
                                            ->where('explore_pro_type', 'LIKE' ,'%amazon%')
                                            ->get();
                                            
        $productDetails = $collections->sortByDesc('created_at');

        return view('freelancer.explorer-amazon', compact('productDetails'));
    }
    
    public function uploadAmazonPage()
    {
        $productDetails = ProductDetail::all();

        return view('freelancer.add-new-amz',compact('productDetails'));
    }

    public function uploadAmazon(Request $request)
    {

        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }

        $validatedData = $request->validate([
        'pname' => 'required|unique:product_details,product_name|max:255',
        'ali_express_link' => 'required',
        'amz_link' => 'required',
        'img_link' => 'required',
        'price' => 'required',
        'star_rating' => 'required',
        't_review' => 'required',
        'category' => 'required'
    ]);

        $productDetails = new ProductDetail;
        $productDetails->product_name = $request->input('pname');
        $productDetails->price = $request->input('price');
        $productDetails->explore_t_review = $request->input('t_review');
        $productDetails->explore_star_rating = $request->input('star_rating');
        $productDetails->explore_pro_type = "amazon";
        $productDetails->category = $category;
        $productDetails->product_type_id = $request->input('type');
        $productDetails->user_id  = auth()->id();
        $productDetails->uploader_name = $request->input('uploadername');
        $productDetails->save();

        $productLinks = new ProductLink;
        $productLinks->aliexpress = $request->input('ali_express_link');
        $productLinks->amazon = $request->input('amz_link');

        $productDetails->productLink()->save($productLinks);

        $productImage = new ProductImage;
        $productImage->image_link_1 = $request->input('img_link');

        $productDetails->productImage()->save($productImage);

        return back()->with('status', 'Product Uploaded Successfully!');
    }

    public function exploreShopifyProduct()
    {
        $user_id = auth()->id();

        $collections = ProductDetail::where('user_id', $user_id)
                                            ->where('explore_pro_type', 'LIKE' ,'%shopify%')
                                            ->get();

        $productDetails = $collections->sortByDesc('created_at');

        return view('freelancer.explorer-shopify', compact('productDetails'));
    }

    public function uploadShopifyPage()
    {
        $productDetails = ProductDetail::all();

        return view('freelancer.add-new-shopify',compact('productDetails'));
    }

    public function uploadShopify(Request $request)
    {
        // dd($request->all());

        $category = $request->category;

        if (is_array($category)) {
        $category = implode(',', $category);
        }
        
        
        $i=0;
        foreach($request->holder as $holder) {
                 

                $productDetails = new ProductDetail;
                $productDetails->product_name = $request->input('pname'.$i);
                $productDetails->price = $request->input('price'.$i);
                $productDetails->product_type_id = $request->input('type'.$i);
                $productDetails->monthly_traffic = $request->input('monthly_traffic');
                $productDetails->ads_spend = $request->input('ads_spend');
                $productDetails->running_ads = $request->input('running_ads');
                $productDetails->fb_page_link = $request->input('fb_page_link');
                $productDetails->uploader_name = $request->input('uploadername');

                $productDetails->user_id  = auth()->id();

                $productDetails->save();

                $productImage = new ProductImage;
                $productImage->image_link_1 = $request->input('img1'.$i);

                $productDetails->productImage()->save($productImage);

                $productLinks = new ProductLink;
                $productLinks->shopify = $request->input('shopify');
                $productLinks->competitor_link_1 = $request->input('competitor1'.$i);
                $productLinks->aliexpress = $request->input('aliexpress'.$i);

                $productDetails->productLink()->save($productLinks);

                $i++;
        }
        

        return back()->with('status', 'Product Uploaded Successfully!');
    }
}
