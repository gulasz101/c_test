<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Product;

/**
 * Class ProductsRepository
 * @package App\Repositories
 */
class ProductsRepository
{
    /**
     * Persists new product model into db.
     * @param array $data
     * @return Product
     */
    public function store(array $data): Product
    {
        $product = new Product();
        $product->fill($data);

        $product->save();

        return $product;
    }
}
