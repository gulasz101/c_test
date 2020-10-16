<?php

declare(strict_types=1);

namespace App\Support\Validable;

/**
 * Trait FormRequestIsValidable
 * @package App\Support\Validable
 */
trait FormRequestIsValidable
{
    /**
     * Get the validated data from input.
     *
     * @return array
     */
    public function getValidatedData(): array
    {
        return $this->validated();
    }
}
