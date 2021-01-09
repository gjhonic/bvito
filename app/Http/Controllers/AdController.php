<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller{

    //Список объявлений
    public function index(){
      $ads = Ad::getNotSold();
      return view('ads/index', compact('ads'));
    }

    //Просмотр объявления
    public function view($id){
      $ad = Ad::find($id);
      $ad->views +=1;
      $ad->update();
      return view('ads/view', compact('ad'));
    }

    //Форма добавления объявления
    public function create_form(){
      return view('ads/create');
    }

    //Форма изменения объявления
    public function update_form($id){
      $ad = Ad::find($id);
      return view('ads/update', compact('ad'));
    }

    //Сохранение формы редактирования
    public function update($id, Request $request){
      $ad = Ad::find($id);
      $ad->title = $request->title;
      $ad->description = $request->description;
      $ad->price = $request->price;
      $ad->update();
      return redirect('/ads/'.$ad->id);
    }

    //Сохранение формы
    public function save(Request $request){
      $ad = new Ad();
      $ad->title = $request->title;
      $ad->description = $request->description;
      $ad->user_id = 1;
      $ad->price = $request->price;
      $ad->views = 0;
      $ad->sold_out = 0;
      $ad->save();
      return redirect('/ads/'.$ad->id);
    }

    //Метод удаления объявления
    public function delete($id){
      $ad = Ad::find($id);
      $ad->delete();
      return redirect('/ads');
    }
}
