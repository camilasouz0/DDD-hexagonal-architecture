<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ResponseController extends Controller
{	
    public function successResponse($message = 'sucesso', $result = [], $code = 200)
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $result,
        ];
    
        return response()->json($response, $code);
    }
    
    /**
     * Error response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function errorResponse(\Exception $e, $result = [], $code = 500) 
    {

    }
}