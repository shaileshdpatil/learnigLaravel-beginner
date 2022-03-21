<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    function myFuncton($user){
        return ["name"=>"shailu","Age"=>21];
    }   
}
