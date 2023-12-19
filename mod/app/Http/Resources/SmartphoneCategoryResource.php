<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SmartphoneCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "merk"=> $this->merk,
            "harga"=> $this->harga,
            "kondisi"=> $this->kondisi,
            "description" => $this->description
        ];
    }
}
