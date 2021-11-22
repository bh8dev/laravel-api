<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductController extends Controller
{
    public function __construct(
        private Product $product
    ){}

    public function index(): AnonymousResourceCollection
    {
        $products = $this->product::with('category')->get();
        return ProductResource::collection($products);
    }
}
