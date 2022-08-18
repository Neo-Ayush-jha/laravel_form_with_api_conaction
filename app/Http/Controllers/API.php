<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class API extends Controller
{
    public function index($name){
        if($name != 'null'){
            $new= $name. 'hii student';
            return response()->json([
                'return'=>$new
            ],200);
        }
        else{
            return response()->json('Datais not found',202);
        }
    }
}
