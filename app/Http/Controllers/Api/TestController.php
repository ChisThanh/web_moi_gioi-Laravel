<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get()
    {
        $response = [
            'success' => true,
            'status' => 200,
            'msg' => 'thành công',
        ];

        return response()->json($response, 200);
    }
}
