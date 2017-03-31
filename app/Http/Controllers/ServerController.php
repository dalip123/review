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
        exec('cd /home/dalip/public_html/check && git pull origin master');
        dd("ok");
    }
}
