<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function payment()
    {
    	# code...
    	$data = [
    		'intent' => $user->createSetupIntent()
    	];
    	
    	return view( view:  'payment')->with($data);
    }
}
