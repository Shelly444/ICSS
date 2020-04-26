<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     public static function deleteData($id){
    DB::table('clients')->where('clientId', '=', $id)->delete();
}
}
