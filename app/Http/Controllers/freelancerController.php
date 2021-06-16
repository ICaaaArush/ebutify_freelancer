<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProductDetail;

class FreelancerController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {   

        //  IF USER'S REGISTERED
    	if(Auth::check()){

            //  IF USER TYPE MATCHES
    		if(Auth::user()->user_type == "user"){

                //  IF USER'S NOT SUBSCRIBED
                if(!Auth::user()->subscribed('main')){

                    //  FETCH AVAILABLE PLANS
                    $availablePlans = [ 'price_1If8QdEgl2c23BzjE4HCoJc3' => 'Monthly',
                    'price_1If8VPEgl2c23Bzjq8LUvao7' => 'Yearly',
                    
                    ];

                    //  FETCH SUBSCRIPTION REQUIRED DATA
                    $data = [
                        'intent' => Auth::user()->createSetupIntent(),
                        'plans' => $availablePlans
                    ];

                    //  VIEW PAYMENT PAGE WITH DATA
                    return view('payment')->with($data);
    		
		        }else{

                    //  SHOW DASHBOARD IF SUBSCRIBED

                    $products = ProductDetail::all();

                    return view('user.customer-dashboard',compact('products'));
                    }

            }elseif (Auth::user()->user_type == "freelancer") {

                return view('freelancer.freelancer-dashboard');
            }

        }
    }

    public function subscribe(Request $request)
    {

        $paymentMethod = $request->payment_method;

        $planId = $request->plan;

        Auth()->user()->newSubscription('main', $planId)->create($paymentMethod);

        return response([
            'success_url'=> redirect()->intended('/dashboard')->getTargetUrl(),
            'message'=>'success'
        ]);
    }

    public function logoutFreelancer(Request $request)
	{
	    Auth::logout();

	    $request->session()->invalidate();

	    $request->session()->regenerateToken();

	    return view('auth.login');
	}

    public function workReportFreelancer()
    {

        return view('freelancer.work-report');
    }

    public function message()
    {

        return view('freelancer.message');
    }

    
    public function myprofile()
    {
        
        return view('freelancer.myprofile');
    }
}
