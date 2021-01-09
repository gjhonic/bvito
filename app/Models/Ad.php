<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MyUser;

class Ad extends Model
{

  //tableName
  protected $table = 'ad';

  public static function getFamouse($order="desc"){
    return static::where('sold_out', 0)->orderBy('views', $order)->get();
  }

  //return list ads which sold out equal 0
  public static function getNotSold($order="desc"){
    return static::where('sold_out', 0)->orderBy('id', $order)->get();
  }

  //return user which added ads
  public function getUser(){
    $user = MyUser::where('id', $this->user_id)->first();
    return $user;
  }
}
