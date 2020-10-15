<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Repositories\ProductsRepository;

/**
 * Class ProductsController
 * @package App\Http\Controllers
 */
class ProductsController extends Controller
{
    /**
     * @param StoreProduct $request
     * @param ProductsRepository $repository
     */
    public function store(StoreProduct $request, ProductsRepository $repository)
    {
        $product = $repository->store(
            $request->validated()
        );
    }
}
