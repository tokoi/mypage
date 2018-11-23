<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;

use Validater;

class BlogController extends Controllers{
    
    //コンストラクター
    public function _construct(){
    
    $this->middleware('auth');
    
    }
    
}






?>