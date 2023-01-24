<?php

namespace App\src\application\CamGirl\Exception;

use Illuminate\Http\JsonResponse;
use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

class CumlouderIsDownException extends RuntimeException
{
    const MESSAGE = 'It is not possible to get the list of webcams at this time. Please try again later.';
    public function render(): JsonResponse
    {
        return response()->json(["error" => true, "message" => self::MESSAGE], Response::HTTP_NOT_FOUND);
    }
}
