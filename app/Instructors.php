<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Instructors extends Model
{
    

    public static function deleteData($id){
    DB::table('instructors')->where('instructorId', '=', $id)->delete();
  }
}
