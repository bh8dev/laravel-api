<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class CategoryResource extends JsonResource
{
    #[ArrayShape([
        'id' => "mixed",
        'name' => "mixed",
        'created_at' => "mixed",
        'updated_at' => "mixed"
    ])]
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
