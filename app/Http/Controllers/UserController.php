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
    public function trendingProducts()
	{
	 	if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->get();

		// dd( $trendingProducts );

		$rows = round(count($trendingProducts)/3);
		// dd($rows);

		// foreach($trendingProducts as $trendingProduct){
		// 	echo ("fuck");
		// }
		// exit();

		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

		return view('user.trending-product',compact('trendingProducts','rows'));

		}else{

	 	return view('auth.login');

	 	}
	}

	public function productDetails()
	{
		if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->get();

		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

		return view('user.product-details',compact('trendingProducts'));

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
