<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
