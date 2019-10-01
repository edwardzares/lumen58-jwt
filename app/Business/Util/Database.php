<?php
/**
 * Created by PhpStorm.
 * User: EDWARD OSORIO
 * Date: 12/05/2018
 * Time: 2:29 PM
 */

namespace App\Business\Util;


use Illuminate\Support\Facades\DB;

class Database
{

    public static function disconnect(){
        DB::disconnect(env('DB_CONNECTION'));
    }

}