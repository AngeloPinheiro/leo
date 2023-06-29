<?php

namespace App\Http\Response;

use Illuminate\Contracts\Support\Responsable;
use Symfony\Component\HttpFoundation\Response;

class MessageResponse implements Responsable
{
    use SendsResponse;

    private array $data;

    public function __construct(
        public readonly string $message,
        public readonly int $status = Response::HTTP_OK,
    ) {
        $this->data = ['message' => $message];
    }
}
