<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdController extends Controller
{
    public function index(){
      $ads = App\Ad::get_not_sold();
      return view('ads', compact('ads'));
    }

    public function view($id){
      $ad = App\Ad::find($id);
      return view('ad', compact('ad'));
    }
}
