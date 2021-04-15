<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FreelancerController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function payment()
    {
        # code...
        echo "payment done";
    }

    public function dashboard()
    {
    	if(Auth::check()){

    		if(Auth::user()->user_type == "user"){
                if(!Auth::user()->subscribed('main')){

                    $availablePlans = [ 'price_1If8QdEgl2c23BzjE4HCoJc3' => 'Monthly',
                    'price_1If8VPEgl2c23Bzjq8LUvao7' => 'Yearly',
                    
                    ];


                    $data = [
                        'intent' => Auth::user()->createSetupIntent(),
                        'plans' => $availablePlans
                    ];

                    return view('payment')->with($data);
    		
		        }else{

                return view('freelancer.index');
                }
            }
    	}
    }

    public function subscribe(Request $request)
    {
        # code...
        $paymentMethod = $request->payment_method;

        $planId = $request->plan;

        Auth()->user()->newSubscription('main', $planId)->create($paymentMethod);

        return response([
            'success_url'=> redirect()->intended('/freelancer-dashboard')->getTargetUrl(),
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
