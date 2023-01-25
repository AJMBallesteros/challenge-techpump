<?php

namespace App\src\domain\Affiliate\Exception;

use Illuminate\Http\JsonResponse;
use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

class AffiliateNotFoundByHostException extends RuntimeException
{
    const MESSAGE = "Not affiliate found for ";
    public function render(): JsonResponse
    {
        return response()->json(["error" => true, "message" => self::MESSAGE . $_SERVER['HTTP_HOST']], Response::HTTP_NOT_FOUND);
    }
}
