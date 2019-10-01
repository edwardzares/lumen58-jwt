<?php
/**
 * Created by PhpStorm.
 * User: EDWARD OSORIO
 * Date: 12/09/2019
 * Time: 2:27 PM
 */

namespace App\Business\Util;


use phpDocumentor\Reflection\Types\Integer;

class UtilDate
{

    public static function getlastMonths($months = 1){
        return self::getTimeOfMonths('-'.$months);
    }

    public static function getTimeOfMonths($months){
        $date = date('Y-m-j');
        $newdate = strtotime ( $months.' month' , strtotime ( $date ) ) ;
        return date ( 'Y-m-j' , $newdate );
    }

}