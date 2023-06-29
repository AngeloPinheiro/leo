<?php

namespace App\Http\Response;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * @property-read mixed $data
 * @property-read int $status
 */
trait SendsResponse
{
    public function toResponse($request): Response
    {
        return new JsonResponse(
            $this->data,
            $this->status,
        );
    }
}
