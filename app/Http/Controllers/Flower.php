<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Flower extends Controller
{




    public function flowers(){
        return view('flower');
    }
    public function main(){
        return view('main');
        
    }

    
}
