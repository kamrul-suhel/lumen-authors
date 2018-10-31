<?php
namespace App\Http\Traits;

trait ApiResponse {
    /**
     * @param $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = 200){
        return response()->json(['data' => $data, 'code' => $code], $code);
    }

    /**
     * @param $message
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code){
        return response()->json(['message' => $message, 'code' => $code], $code);
    }
}
