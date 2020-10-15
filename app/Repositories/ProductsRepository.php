<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Product;

/**
 * Class ProductsRepository
 * @package App\Repositories
 */
class ProductsRepository extends Repository
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

        $this->persist($product);

        return $product;
    }
}
