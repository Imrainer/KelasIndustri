<?php 

namespace App\Helpers;

class TodoApi
{
    protected static $response = [
        'code' => null,
        'message'=> null,
        'data'=> null,
    ];

    public static function createApi($code = null, $messag = null, $data = null) {
    self::$response['code'] = $code;
    self::$response['messag'] = $message;
    self::$response['data'] = $data;

    return response()->json(self::$response,self::$response['code']);


    }
}

?>