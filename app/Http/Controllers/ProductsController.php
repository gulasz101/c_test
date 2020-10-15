<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Http\Resources\ProductResource;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Response;

/**
 * Class ProductsController
 * @package App\Http\Controllers
 */
class ProductsController extends Controller
{
    /**
     * @param StoreProduct $request
     * @param ProductsRepository $repository
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function store(StoreProduct $request, ProductsRepository $repository)
    {
        $product = $repository->store(
            $request->validated()
        );

        return response(
            new ProductResource($product),
            Response::HTTP_CREATED,
            ['Location' => route('products.show', $product->id)]
        );
    }
}
