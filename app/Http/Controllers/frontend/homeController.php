<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function singlePage(){
        return view('frontend.single-page');
    }
}
