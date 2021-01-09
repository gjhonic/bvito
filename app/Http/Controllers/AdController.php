<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\UserIdentity;

class AdController extends Controller{

    //Список объявлений
    public function index(Request $request){
      $ads = Ad::getNotSold();

      if(UserIdentity::isAuth($request)){
        return view('back/cont/ads/index', ['ads' => $ads]);
      }else{
        return view('front/cont/ads/index', ['ads' => $ads]);
      }
      return view('ads/index', compact('ads'));
    }

    //Просмотр объявления
    public function view($id, Request $request){
      $ad = Ad::find($id);
      $ad->views +=1;
      $ad->update();

      if(UserIdentity::isAuth($request)){
        return view('back/cont/ads/view', ['ad' => $ad]);
      }else{
        return view('front/cont/ads/view', ['ad' => $ad]);
      }
    }

    //Просмотр объявления
    public function meads(Request $request){
      if(UserIdentity::isAuth($request)){
        $ads = Ad::where('user_id', UserIdentity::getIdUser($request))->get();
        return view('back/cont/ads/meаds', ['ads' => $ads]);
      }
    }

    //Форма добавления объявления
    public function create_form(Request $request){
      if(UserIdentity::isAuth($request)){
        return view('back/cont/ads/create');
      }
    }

    //Форма изменения объявления
    public function update_form(Request $request, $id){
      $ad = Ad::find($id);

      if(UserIdentity::isAuth($request)){
        return view('back/cont/ads/update', ['ad' => $ad]);
      }else{
        return view('front/cont/ads/update', ['ad' => $ad]);
      }

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
      $ad->user_id = UserIdentity::getIdUser($request);
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
