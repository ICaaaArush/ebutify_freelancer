<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FreelancerController extends Controller
{
    //
    public function dashboard()
    {
    	if(Auth::check()){

    		if(Auth::user()->user_type == "admin")

            

    		return view('freelancer.index');
    		
    	}
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

    public function productResearch($value='')
    {

        return view('freelancer.product-research');
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
