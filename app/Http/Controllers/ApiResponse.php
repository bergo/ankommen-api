<?php

namespace App\Http\Controllers;

trait ApiResponse
{
    public function sendResult($data, $code = 200)
    {
        $e = [
            'error' => false,
            'data' => $data
        ];
        return response()
            ->json($e);
    }

    public function sendError($code = 500, $msg = '')
    {
        $e = [
            'error' => true,
            'code' => $code
        ];
        $msg != '' ? $e['message'] = $msg : null;
        $e = [];
        return response()
            ->json($e);
    }
}