<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public static function deleteData($id){
    DB::table('lessons')->where('lessonId', '=', $id)->delete();
  }

  public static function deleteAvailabilities($id){
    DB::table('availabilities')->where('availabilityId', '=', $id)->delete();
  }
}
