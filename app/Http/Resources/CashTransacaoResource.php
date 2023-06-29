<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CashTransacaoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'operacao' => $this->operacao,
            'cartao' => $this->cartao,
            'valor' => $this->valor,
        ];
    }
}
