<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class ProductResource extends JsonResource
{
    #[Pure] #[ArrayShape([
        'id' => "mixed",
        'category_id' => "mixed",
        'name' => "mixed",
        'description' => "mixed",
        'price' => "string",
        'category' => "mixed"
    ])]
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => number_format($this->price / 100, 2),
            'category' => new CategoryResource($this->category)
        ];
    }
}
