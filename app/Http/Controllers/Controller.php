<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Response;
use Illuminate\Log\Logger;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function result($data=[]){
        $data = [
            'error_code'=>'0000',
            'error_message'=>'success',
            'data' => $data,
            'server_time'=>time(),
        ];
       return \response()->json($data,200,['Allowed'=>'*']);
    }
    function error($error_code,$customMessage=''){
        $message = $customMessage ? $customMessage : $error_code['message'];
        $data=[
            'error_code'=>$error_code['code'],
            'error_message'=>$message,
            '$data'=>[],
            'server_time'=>time(),
        ];
        return \response()->json($data,200,['Allowed'=>'*']);
    }
}
