<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use JetBrains\PhpStorm\Pure;

class ApiController extends Controller
{
    public function __construct(
        private Category $category,
    ){}

    public function index(): AnonymousResourceCollection
    {
        $categories = $this->category::all();
        return CategoryResource::collection($categories);
    }

    #[Pure]
    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }
}
