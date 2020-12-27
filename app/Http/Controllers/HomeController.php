<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller{


  public function index(){
    return view('homepages/index');
  }

  public function about(){
    return view('homepages/about');
  }

  public function contact(){
    return view('homepages/contact');
  }
}
