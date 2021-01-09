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
    $request->session()->put('nowuser', $nowuser);
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

}
