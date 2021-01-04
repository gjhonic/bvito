<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
  public $id;
  public $title;
  public $description;
  public $user_id;
  public $sold_out;

  //TableName
  protected $table = 'ad';

  public static function get_not_sold(){
    return static::where('sold_out', 0)->get();
  }
}
