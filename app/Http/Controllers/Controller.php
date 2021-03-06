<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Return response
     *
     * @param $message
     * @param $status
     * @return \Illuminate\Http\JsonResponse
     */
    protected function response($message, $status) {
        return response()->json([
            'message' => $message], $status);
    }
}
