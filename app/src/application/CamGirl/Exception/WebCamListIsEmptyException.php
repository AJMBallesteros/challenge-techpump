<?php

namespace App\src\application\CamGirl\Exception;

use Illuminate\Http\JsonResponse;
use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

class WebCamListIsEmptyException extends RuntimeException
{
    const MESSAGE = 'We do not have webcams available at this time';

    public function render(): JsonResponse
    {
        return response()->json(["error" => true, "message" => self::MESSAGE], Response::HTTP_NOT_FOUND);
    }
}
