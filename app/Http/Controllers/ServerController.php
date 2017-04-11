<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use SSH;
use Validator;

class ServerController extends Controller
{
    public function deploy()
    {
        exec('cd /home/dalip/public_html/check && git pull origin master');
        dd("ok");
    }  

       public function submitReview(Request $request)
    {
    	$messages = [
    'name'    => 'Name is required.',
    'email'    => 'Email is required',
    'phone' => 'Phone number is required.',
    'facebook'    => 'Review us at facebook.',
    'google'    => 'Review us at google.',
];
         $validator = Validator::make($request->all(), [
	'name' => 'required',
    'email' => 'required',
    'phone' => 'required',
    'facebook' => 'required|min:1',
    'google' => 'required|min:1',

],$messages);
        if ($validator->fails()) {
	return redirect('index') //change this to your desired url
		->withErrors($validator)
		->withInput();
}
        

       
        
    }
}
