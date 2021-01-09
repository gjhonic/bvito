<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model{

  //tableName
  protected $table = 'myuser';

  public function user_save(){
    if(true){
      $this->save();
      return true;
    }
  }

}
