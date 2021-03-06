<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use JetBrains\PhpStorm\Pure;

class ApiController extends Controller
{
    public function __construct(
        private Category $category
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

    public function store(StoreCategoryRequest $request): CategoryResource
    {
        $category = $this->category::query()
            ->create($request->validated());

        return new CategoryResource($category);
    }

    public function update(Category $category, StoreCategoryRequest $request): CategoryResource
    {
        $category->update($request->validated());

        return new CategoryResource($category);
    }

    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return response()->json(null, 204);
    }
}
