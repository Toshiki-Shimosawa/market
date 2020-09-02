<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\CheckShipment;

class OrderController extends Controller
{
    public function ajaxMessage(Request $request){
        $data = $request->all();
        Log::debug($data);
        $res = CheckShipment::check($data['zip']);
        return $res;

        
    }
}
