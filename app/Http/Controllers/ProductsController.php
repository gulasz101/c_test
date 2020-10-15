<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;

/**
 * Class ProductsController
 * @package App\Http\Controllers
 */
class ProductsController extends Controller
{
    /**
     * @param StoreProduct $request
     */
    public function store(StoreProduct $request)
    {
        $data = $request->validated();
    }
}
