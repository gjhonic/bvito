<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MyUser;

class Ad extends Model
{

  //tableName
  protected $table = 'ad';

  //return list ads which sold out equal 0
  public static function getNotSold(){
    return static::where('sold_out', 0)->get();
  }

  //return user which added ads
  public function getUser(){
    $user = new MyUser();
    $user->name = "Евгеша";
    return $user;
  }
}
