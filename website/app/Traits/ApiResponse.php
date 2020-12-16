<?php

namespace App\Traits;

use App\Helpers\Helper;

trait ApiResponse
{
    /**
     * To get api success
     * @param  null  $data
     * @param  null  $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiSuccessResponse($data = null, $message = null )
    {
        $message = @$message ? $message : __('api.success');
        return $this->apiResponse([
            Helper::CODE_SUCCESS,
            Helper::HTTP_OK,
            $message,
            $data,
        ]);
    }

    public function apiErrorResponse($data = null, $message = null, $errors = null, $responseCode = Helper::HTTP_SERVE_ERROR)
    {
        $message = @$message ? $message : __('api.error');
        return $this->apiResponse([
            $responseCode,
            Helper::CODE_FAIL,
            $message,
            $data,
            $errors
        ]);

    }
    /**
     * To get api response
     *
     * @param $code
     * @param  null  $data
     * @param  null  $message
     * @param  int  $responseCode
     * @param  null  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiResponse($code, $responseCode = Helper::HTTP_OK, $data = null, $message = null, $errors = null)
    {
        return response()->json([
            'code' => $code,
            'response_code' => $responseCode,
            'message' => $message,
            'data' => !empty($data) ? $data : new \stdClass(),
            'errors' => is_array($errors) ? $errors : (!is_null($errors) ? [$errors] : []),
            'current_time' => time(),
        ]);
    }
}
