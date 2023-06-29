<?php

namespace App\Http\Response;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Symfony\Component\HttpFoundation\Response;

class CollectionResponse implements Responsable
{
    use SendsResponse;


    public function __construct(
        public readonly ResourceCollection $data,
        public readonly int $status = Response::HTTP_OK,
    ) {}
}
