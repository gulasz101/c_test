<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Product;
use App\Support\Validable\ValidableContract as Validable;

/**
 * Class ProductsRepository
 * @package App\Repositories
 */
class ProductsRepository extends Repository
{
    /**
     * Persists new product model into db.
     * @param Validable $validableInput
     * @return Product
     */
    public function store(Validable $validableInput): Product
    {
        $product = new Product();
        $product->fill(
            $validableInput->getValidatedData()
        );

        $this->persist($product);

        return $product;
    }
}
