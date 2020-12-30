<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdController extends Controller{

    //Список обьявлений
    public function index(){
      $ads = App\Ad::get_not_sold();
      return view('ads/index', compact('ads'));
    }

    //Просмотр обьявления
    public function view($id){
      $ad = App\Ad::find($id);
      return view('ads/view', compact('ad'));
    }

    //Форма добавления обьявления
    public function create_form(){
      $ad = App\Ad::find($id);
      return view('ads/view', compact('ad'));
    }

    //Сохранение формы
    public function create_form(){
      $ad = App\Ad::find($id);
      return view('ads/view', compact('ad'));
    }
}
