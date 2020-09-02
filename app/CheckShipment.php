<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckShipment extends Model
{
    private const NO_SHIPMENT = [
        '1111111',
        '2222222',
        '3333333',
        '4444444',
        '5555555',
    ];

    public static function check($zip){
        if(in_array($zip, self::NO_SHIPMENT)){
            return 1;
        }else{
            return 0;
        }
    }
}
