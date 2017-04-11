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
         $validator = Validator::make($request->all(), [
	'name' => 'required',
    'email' => 'required',
    'phone' => 'required',
    'package' => 'required',
    'price' => 'required',
]);
        if ($validator->fails()) {
	return redirect('index') //change this to your desired url
		->withErrors($validator)
		->withInput();
}
        

       
        
    }
}
