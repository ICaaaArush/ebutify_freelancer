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
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Hash;
use Validator;
use ZipArchive;
use File;


class UserController extends Controller
{
	public function profile()
	{
        return view('user.profile');
	}

	public function profileupdate(Request $request){

		$path = $request->profile_upload->store('userimages/profile', 'public');

		$update = User::where('id',Auth::user()->id)->update([
			'name' => $request->name,
			'address' => $request->address,
			'email' =>$request->email,
			'profile_photo_path' => $path
		]);

		return back();
	}

	public function passwordchange(Request $request){
		$validator = Validator::make($request->all(), [
			'password' => 'required|password',
			'new_password' => 'required_with:confirm_password|same:confirm_password',
			'confirm_password' => ['required'],
		])->validate();
		$password = Hash::make($request->new_password);
		$update = User::where('id',Auth::user()->id)->update([
			'password' => $password
		]);

		return back();

	}


	public function allProduct(Request $request)
	{
		if(Auth::check()){
			$sortSelected = 0;
	        $filterSelected = 0;
	        $categorySelected = 0;
		if(!empty($request->category)){
			// dd($request->category);
		}

		//-- HANDLE SORTING
      	if($request->sort) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
			case 1:
				$orderColumn = 'profit';
			break;
			case 2:
				$orderColumn = 'total_order';
			break;
			case 3:
				$orderColumn = 'created_at';
			break;
			case 4:
				$orderColumn = 'total_order';
			break;
			case 5:
				$orderColumn = 'total_order';
			break;
			default:
				$orderColumn = 'product_name';
			break;        
 			}
 			
      	}else{
      		$orderColumn = 'created_at';
      	}

      	//-- HANDLE CATEGORY
      	if($request->category) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->category){
			case 1:
				$category = 'Women\'s Fashion';
			break;
			case 2:
				$category = 'Man\'s Fashion';
			break;
			case 3:
				$category = 'Health & Beauty';
			break;
			case 4:
				$category = 'Home Improvement';
			break;
			case 5:
				$category = 'Garden Improvement';
			break;
			case 6:
				$category = 'Pet Accessories';
			break;
			case 7:
				$category = 'Electronics';
			break;
			case 8:
				$category = 'Computer Accessories';
			break;
			case 9:
				$category = 'Baby & Kids';
			break;
			case 10:
				$category = 'Kitchen & household';
			break;
			case 11:
				$category = 'Jewellery';
			break;
			case 12:
				$category = 'Car Accessories';
			break;
			case 13:
				$category = 'Bike Accessories';
			break;
			case 14:
				$category = 'Mobile Accessories';
			break;
			case 15:
				$category = 'Fitness';
			break;
			case 16:
				$category = 'Bag\'s & Shoes';
			break;
			case 17:
				$category = 'Outdoor';
			break;
			case 18:
				$category = 'Beauty Hair';
			break;
			default:
				$category = '';
			break;        
 			}
 			
      	}else{
      		$category = '';
      	}
      
      	//-- HANDLE FILTER
      	if($request->filter) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
			case 1:
				$trendingProducts = ProductDetail::where('price', '<=' ,'30')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(18);
				// dd($trendingProducts);
			break;
			case 2:
				$trendingProducts = ProductDetail::where('price', '>=' , '30')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->orderBy($orderColumn,'DESC')->paginate(18);
			break;
			case 3:
				$trendingProducts = ProductDetail::where('profit', '>=' , '15')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->orderBy($orderColumn,'DESC')->paginate(18);
			break;
			case 4:
				$trendingProducts = ProductDetail::where('cost', '<=' , '20')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->orderBy($orderColumn,'DESC')->paginate(18);
			break;
			default:
				$filterBy = 'product_name';
			break;        
 			}
      	}else{

      	}

      	if($request->search) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
      		// dd($request->search);
      		$trendingProducts = ProductDetail::where('product_name', 'LIKE', '%'.$request->search.'%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(18);
      	}
      	if (empty($trendingProducts)) {
      		$trendingProducts = ProductDetail::where('category', 'LIKE' ,'%'.$category.'%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->orderBy($orderColumn,'DESC')->paginate(18);
      	}

		// $trendingProducts = ProductDetail::all();
		// count($trendingProducts);

		// dd( $trendingProducts );

      	        $artilces = '';
        if ($request->ajax()) {
            foreach ($trendingProducts as $result) {

            	$product_id = $result->id;

                $artilces.=
                '<div class="col-md-4 mt-4">
              <div class="card shadow" style="min-width: 280px;">
                <div class="row px-2 video-icon">
                  <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="...">
                  <i class="fas fa-play-circle video-play-icon"></i>
                </div>
                <div class="row card-body px-2">
                  <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                    <h5 class="card-title">'.$result->product_name.'</h5>
                  </div>
                  <div class="col-12 px-3">
                    <div class="row">
                      <div class="col-7">
                        <span>Order</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>'.$result->total_order.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Product Cost</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->cost.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Selling Price</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->price.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Profit Margin</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->profit.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Total Sales</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->total_revenue.'</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mx-4 px-2 mb-2 justify-content-center rounded icon-btn">
                  <a href="{{route(\'all-product-details\',['.$result->id.'])}}" type="button" class="btn fb-ads-card-btn">View Product Details</a>
                </div>
              </div>
				</div>';
            }
            return $artilces;
        }


		foreach ($trendingProducts as $trendingproduct) {

			$country = $trendingproduct->country.",";

		}

		if (empty($country)) {

			return view('user.all-product',compact('trendingProducts','sortSelected','filterSelected','categorySelected'));

		}else{

			return view('user.all-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));
		}

		return view('user.all-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));

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
			
			if (empty($country)) {

				return view('user.product-details',compact('trendingProducts'));

			}else{

				return view('user.product-details',compact('trendingProducts','country'));
			}

		}else{

	 	return view('auth.login');
		}
	}

    public function trendingProducts(Request $request)
	{
	 	if(Auth::check()){
	 		$sortSelected = 0;
            $filterSelected = 0;
            $categorySelected = 0;
		//-- HANDLE SORTING
      	if($request->sort) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
			case 1:
				$orderColumn = 'profit';
			break;
			case 2:
				$orderColumn = 'total_order';
			break;
			case 3:
				$orderColumn = 'created_at';
			break;
			case 4:
				$orderColumn = 'total_order';
			break;
			case 5:
				$orderColumn = 'total_order';
			break;
			default:
				$orderColumn = 'product_name';
			break;        
 			}
 			
      	}else{
      		$orderColumn = 'created_at';
      	}

      	//-- HANDLE CATEGORY
      	if($request->category) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->category){
			case 1:
				$category = 'Women\'s Fashion';
			break;
			case 2:
				$category = 'Man\'s Fashion';
			break;
			case 3:
				$category = 'Health & Beauty';
			break;
			case 4:
				$category = 'Home Improvement';
			break;
			case 5:
				$category = 'Garden Improvement';
			break;
			case 6:
				$category = 'Pet Accessories';
			break;
			case 7:
				$category = 'Electronics';
			break;
			case 8:
				$category = 'Computer Accessories';
			break;
			case 9:
				$category = 'Baby & Kids';
			break;
			case 10:
				$category = 'Kitchen & household';
			break;
			case 11:
				$category = 'Jewellery';
			break;
			case 12:
				$category = 'Car Accessories';
			break;
			case 13:
				$category = 'Bike Accessories';
			break;
			case 14:
				$category = 'Mobile Accessories';
			break;
			case 15:
				$category = 'Fitness';
			break;
			case 16:
				$category = 'Bag\'s & Shoes';
			break;
			case 17:
				$category = 'Outdoor';
			break;
			case 18:
				$category = 'Beauty Hair';
			break;
			default:
				$category = '';
			break;        
 			}
 			
      	}else{
      		$category = '';
      	}
      
      	//-- HANDLE FILTER
      	if($request->filter) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
			case 1:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('price', '<=' ,'30')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(18);
				// dd($trendingProducts);
			break;
			case 2:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('price', '>' , '30')->orderBy($orderColumn,'DESC')->paginate(18);
			break;
			case 3:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('profit', '>=' , '15')->orderBy($orderColumn,'DESC')->paginate(18);
			break;
			case 4:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('cost', '<=' , '20')->orderBy($orderColumn,'DESC')->paginate(18);
			break;
			default:
				$filterBy = 'product_name';
			break;        
 			}
      	}else{

      	}

      	if($request->search) {
      		// dd($request->search);
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('product_name', 'LIKE', '%'.$request->search.'%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(18);
      	}
      	if (empty($trendingProducts)) {
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(18);
      	}	 	
			
		// $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->get();

		// dd( $trendingProducts );


      	$artilces = '';
        if ($request->ajax()) {
            foreach ($trendingProducts as $result) {
                
                $artilces.=
			'<div class="col-md-4 mt-4">
              <div class="card shadow">

                <div class="row px-2 video-icon">
                  <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="...">
                  <i class="fas fa-play-circle video-play-icon"></i>
                </div>

                <div class="row card-body px-2">
                  <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                    <h5 class="card-title">'.$result->product_name.'</h5>
                  </div>
                  <div class="col-12 px-3">
                    <div class="row">
                      <div class="col-7">
                        <span>Order</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>'.$result->product_name.'total_order}}</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Product Cost</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->cost.'}}</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Selling Price</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->price.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Profit Margin</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->profit.'</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Total Sales</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$'.$result->total_revenue.'</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mx-4 px-2 mb-2 justify-content-center rounded icon-btn">
                  <a href="{{route(\'trending-product-details\',['.$result->id.'])}}" type="button" class="btn fb-ads-card-btn">View Product Details</a>
                </div>
              </div>
</div>';
            }
            return $artilces;
        }



		foreach ($trendingProducts as $trendingproduct) {
			$country = $trendingproduct->country.",";

			// echo $country;
		}

			if (empty($country)) {

				return view('user.trending-product',compact('trendingProducts','sortSelected','filterSelected','categorySelected'));

			}else{

				return view('user.trending-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));
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

			return view('user.product-details',compact('trendingProducts',));

		}else{

			return view('user.product-details',compact('trendingProducts','country'));

		}
		

		}else{

	 	return view('auth.login');
		}
	}

	public function fbAdProducts(Request $request)
	{
		if(Auth::check()){
			$sortSelected = 0;
            $filterSelected = 0;
            $categorySelected = 0;
		//-- HANDLE SORTING
      	if($request->sort) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
			case 1:
				$orderColumn = 'profit';
			break;
			case 2:
				$orderColumn = 'total_order';
			break;
			case 3:
				$orderColumn = 'created_at';
			break;
			case 4:
				$orderColumn = 'total_order';
			break;
			case 5:
				$orderColumn = 'total_order';
			break;
			default:
				$orderColumn = 'product_name';
			break;        
 			}
 			
      	}else{
      		$orderColumn = 'created_at';
      	}

      	//-- HANDLE CATEGORY
      	if($request->category) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->category){
			case 1:
				$category = 'Women\'s Fashion';
			break;
			case 2:
				$category = 'Man\'s Fashion';
			break;
			case 3:
				$category = 'Health & Beauty';
			break;
			case 4:
				$category = 'Home Improvement';
			break;
			case 5:
				$category = 'Garden Improvement';
			break;
			case 6:
				$category = 'Pet Accessories';
			break;
			case 7:
				$category = 'Electronics';
			break;
			case 8:
				$category = 'Computer Accessories';
			break;
			case 9:
				$category = 'Baby & Kids';
			break;
			case 10:
				$category = 'Kitchen & household';
			break;
			case 11:
				$category = 'Jewellery';
			break;
			case 12:
				$category = 'Car Accessories';
			break;
			case 13:
				$category = 'Bike Accessories';
			break;
			case 14:
				$category = 'Mobile Accessories';
			break;
			case 15:
				$category = 'Fitness';
			break;
			case 16:
				$category = 'Bag\'s & Shoes';
			break;
			case 17:
				$category = 'Outdoor';
			break;
			case 18:
				$category = 'Beauty Hair';
			break;
			default:
				$category = '';
			break;        
 			}
 			
      	}else{
      		$category = '';
      	}
      
      	//-- HANDLE FILTER
      	if($request->filter) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
			case 1:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('price', '<=' ,'30')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(25);
				// dd($trendingProducts);
			break;
			case 2:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('price', '>=' , '30')->orderBy($orderColumn,'DESC')->paginate(25);
			break;
			case 3:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('profit', '>=' , '15')->orderBy($orderColumn,'DESC')->paginate(25);
			break;
			case 4:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('cost', '<=' , '20')->orderBy($orderColumn,'DESC')->paginate(25);
			break;
			default:
				$filterBy = 'product_name';
			break;        
 			}
      	}else{

      	}

      	if($request->search) {
      		// dd($request->search);
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('product_name', 'LIKE', '%'.$request->search.'%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(25);
      	}
      	if (empty($trendingProducts)) {
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(25);
      	}
			
		// $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->get();
		




		foreach ($trendingProducts as $trendingproduct) {
			
			$country = $trendingproduct->country.",";

		}

			if (empty($country)) {

				return view('user.practice-fb-ads-product',compact('trendingProducts','sortSelected','filterSelected','categorySelected'));

			}else{

				return view('user.practice-fb-ads-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));

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

		}

		return view('user.product-details',compact('trendingProducts','country'));

		}else{

	 	return view('auth.login');
		}
	}

	public function untappedProducts(Request $request)
	{
		if(Auth::check()){
			$sortSelected = 0;
            $filterSelected = 0;
            $categorySelected = 0;
		//-- HANDLE SORTING
      	if($request->sort) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
			case 1:
				$orderColumn = 'profit';
			break;
			case 2:
				$orderColumn = 'total_order';
			break;
			case 3:
				$orderColumn = 'created_at';
			break;
			case 4:
				$orderColumn = 'total_order';
			break;
			case 5:
				$orderColumn = 'total_order';
			break;
			default:
				$orderColumn = 'product_name';
			break;        
 			}
 			
      	}else{
      		$orderColumn = 'created_at';
      	}

      	//-- HANDLE CATEGORY
      	if($request->category) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->category){
			case 1:
				$category = 'Women\'s Fashion';
			break;
			case 2:
				$category = 'Man\'s Fashion';
			break;
			case 3:
				$category = 'Health & Beauty';
			break;
			case 4:
				$category = 'Home Improvement';
			break;
			case 5:
				$category = 'Garden Improvement';
			break;
			case 6:
				$category = 'Pet Accessories';
			break;
			case 7:
				$category = 'Electronics';
			break;
			case 8:
				$category = 'Computer Accessories';
			break;
			case 9:
				$category = 'Baby & Kids';
			break;
			case 10:
				$category = 'Kitchen & household';
			break;
			case 11:
				$category = 'Jewellery';
			break;
			case 12:
				$category = 'Car Accessories';
			break;
			case 13:
				$category = 'Bike Accessories';
			break;
			case 14:
				$category = 'Mobile Accessories';
			break;
			case 15:
				$category = 'Fitness';
			break;
			case 16:
				$category = 'Bag\'s & Shoes';
			break;
			case 17:
				$category = 'Outdoor';
			break;
			case 18:
				$category = 'Beauty Hair';
			break;
			default:
				$category = '';
			break;        
 			}
 			
      	}else{
      		$category = '';
      	}
      
      	//-- HANDLE FILTER
      	if($request->filter) {
      		$sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
			case 1:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('price', '<=' ,'30')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(25);
				// dd($trendingProducts);
			break;
			case 2:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('price', '>=' , '30')->orderBy($orderColumn,'DESC')->paginate(25);
			break;
			case 3:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('profit', '>=' , '15')->orderBy($orderColumn,'DESC')->paginate(25);
			break;
			case 4:
				$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('cost', '<=' , '20')->orderBy($orderColumn,'DESC')->paginate(25);
			break;
			default:
				$filterBy = 'product_name';
			break;        
 			}
      	}else{

      	}

      	if($request->search) {
      		// dd($request->search);
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('product_name', 'LIKE', '%'.$request->search.'%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(25);
      	}
      	if (empty($trendingProducts)) {
      		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->where('explore_pro_type', 'NOT LIKE' ,'%ali_express%')->where('explore_pro_type', 'NOT LIKE' ,'%amazon%')->where('explore_pro_type', 'NOT LIKE' ,'%shopify%')->where('category', 'LIKE' ,'%'.$category.'%')->orderBy($orderColumn,'DESC')->paginate(25);
      	}
      	
	    // $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->where($filterBy)->orderBy($orderColumn,'DESC')->paginate(5);
	    // dd($trendingProducts);

		// $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%untapped_product%')->get();

		// dd( $trendingProducts );

		if (!empty($trendingProducts) ){

			foreach ($trendingProducts as $trendingproduct) {
				
				$country = $trendingproduct->country.",";
				// dd($country);
			}
			if (empty($country)) {
				return view('user.practice-untapped-product',compact('trendingProducts','sortSelected','filterSelected','categorySelected'));
			}else{
				return view('user.practice-untapped-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));
			}
			

		}else{

			return view('user.practice-untapped-product',compact('trendingProducts','country','sortSelected','filterSelected','categorySelected'));

		}

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
			if (empty($country)) {

				return view('user.product-details',compact('trendingProducts'));

			}else{

				return view('user.product-details',compact('trendingProducts','country'));

			}
		}else{

	 		return view('auth.login');

		}
	}

	public function viewTutorial($value='')
	{
		return view('user.tutorial');
	}

	public function viewFAQ($value='')
	{
		return view('user.FAQ');
	}

	public function viewContactUs($value='')
	{
		return view('user.contact-us');
	}

    public function downloadGIF($gifs)
	{
    	// echo $gifs;
    	$files = explode(',', $gifs);
    	$headers = [
        'Content-Type' => 'application/octet-stream',
    ];
    	$zip = new ZipArchive();
		$zip_name = "ebutify_gif_".time().".zip"; // Zip name
	    touch($zip_name);
		
		$zip->open($zip_name,  ZipArchive::CREATE);
		foreach ($files as $file) {
		  $path = asset('/storage/'.$file);
		  //if(file_exists($path)){
		  $zip->addFromString(basename($path),  file_get_contents($path));
		  //}
		  //else{
		  // echo"file does not exist";
		  //}
		}
		$zip->close();
// 		dd(basename($path));
// 		dd($zip);

// 		return response()->download('http://ecomfia.com/'.$zip_name);
        return redirect('https://ecomfia.com/'.$zip_name);

    }
}
