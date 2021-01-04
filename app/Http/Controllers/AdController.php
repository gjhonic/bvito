<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller{

    //Список обьявлений
    public function index(){
      $ads = Ad::get_not_sold();
      return view('ads/index', compact('ads'));
    }

    //Просмотр обьявления
    public function view($id){
      $ad = Ad::find($id);
      return view('ads/view', compact('ad'));
    }

    //Форма добавления обьявления
    public function create_form(){
      return view('ads/create');
    }

    //Сохранение формы
    public function save(Request $request){
      $ad = new Ad();
      $ad->title = $request->title;
      $ad->description = $request->description;
      $ad->user_id = 1;
      $ad->sold_out = 0;
      $ad->save();
      return view('ad/'.$ad->id);
    }
}
