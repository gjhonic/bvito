<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MyUser;
use Illuminate\Http\Request;

class UserIdentity{

  private $nowuser = [];

  //Устанавливает текущего пользователя
  public static function setUserIdentity(Request $request, $user){
    $nowuser['name'] = $user->name;
    $nowuser['username'] = $user->username;
    $nowuser['id'] = $user->id;
    $request->session()->put('nowuser', $nowuser);
  }

  //Возвращает текущего пользователя
  public static function getIdUser(Request $request){
    $user = $request->session()->get('nowuser');
    return $user['id'];
  }

  //Возвращает текущего пользователя
  public static function nowUser(Request $request){
    return $request->session()->get('nowuser');
  }

  //Сбрасывает текущего пользователя
  public static function removeUser(Request $request){
    $request->session()->forget('nowuser');
    $nowuser = [];
  }
 
  public static function isAuth(Request $request){
    if ($request->session()->has('nowuser')){
      return true;
    }else{
      return false;
    }
  }

}
