<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use SSH;

class ServerController extends Controller
{
    public function deploy()
    {
       SSH::into('production')->run(array(
        'cd ~/public_html/check',
        'git pull origin master'
    ), function($line){
    
        echo $line.PHP_EOL; // outputs server feedback
    });
    }
}
