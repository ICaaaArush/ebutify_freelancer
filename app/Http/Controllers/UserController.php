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


class UserController extends Controller
{
	public function allProduct()
	{
		if(Auth::check()){
			
		$trendingProducts = ProductDetail::all();

		count($trendingProducts);

		// dd( $trendingProducts );

		foreach ($trendingProducts as $trendingproduct) {

			$country = $trendingproduct->country.",";

		}

		return view('user.all-product',compact('trendingProducts','country'));

		}else{

	 	return view('auth.login');

	 	}
	}

	public function allProductDetails($product_id)
	{

		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('id', $product_id)
		->get();
		// dd($trendingProducts);
		
		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

		return view('user.product-details',compact('trendingProducts','country'));

		}else{

	 	return view('auth.login');
		}
	}

    public function trendingProducts()
	{
	 	if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->get();

		// dd( $trendingProducts );

		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

			if (empty($country)) {

				return view('user.trending-product',compact('trendingProducts'));

			}else{

				return view('user.trending-product',compact('trendingProducts','country'));

			}

		}else{

	 	return view('auth.login');

	 	}
	}

	public function trendingProductDetails($product_id)
	{

		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')
		->where('id', $product_id)
		->get();
		
		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

		if (empty($country)) {

			return view('user.product-details',compact('trendingProducts'));

		}else{

			return view('user.product-details',compact('trendingProducts','country'));

		}
		

		}else{

	 	return view('auth.login');
		}
	}

	public function fbAdProducts()
	{
		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->get();

		// dd( $trendingProducts );
		

		foreach ($trendingProducts as $trendingproduct) {
			
			$country = $trendingproduct->country.",";
			// dd($country);

		}

			if (empty($country)) {

				return view('user.practice-fb-ads-product',compact('trendingProducts'));

			}else{

				return view('user.practice-fb-ads-product',compact('trendingProducts','country'));

			}
		

		}else{

	 	return view('auth.login');

	 	}
	}

	public function fbAdProductsDetails($product_id)
	{

		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')
		->where('id', $product_id)
		->get();
		
		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

		return view('user.product-details',compact('trendingProducts','country'));

		}else{

	 	return view('auth.login');
		}
	}

	public function untappedProducts()
	{
		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->get();

		// dd( $trendingProducts );

		if (!empty($trendingProducts) ){

			foreach ($trendingProducts as $trendingproduct) {
				
				$country = $trendingproduct->country.",";
				// dd($country);
			}
		}

		return view('user.practice-untapped-product',compact('trendingProducts','country'));

		}else{

	 	return view('auth.login');

	 	}
	}

	public function untappedProductsDetails($product_id)
	{

		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')
		->where('id', $product_id)
		->get();

		// dd($trendingProducts);

		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

		return view('user.product-details',compact('trendingProducts','country'));

		}else{

	 	return view('auth.login');
		}
	}


    public function downloadGIF($gifs)
    {
    	// echo $gifs;
    	$files = explode(',', $gifs);
    	// dd($files);
    	$zip = new ZipArchive();
		$zip_name = "ebutify_gif_".time().".zip"; // Zip name
		$zip->open($zip_name,  ZipArchive::CREATE);
		foreach ($files as $file) {
		  echo $path = public_path('storage/').$file;
		  if(file_exists($path)){
		  $zip->addFromString(basename($path),  file_get_contents($path));
		  }
		  else{
		   echo"file does not exist";
		  }
		}
		$zip->close();

		return response()->download(public_path($zip_name));

    }
}
