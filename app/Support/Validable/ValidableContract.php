<?php

declare(strict_types=1);

namespace App\Support\Validable;

/**
 * Interface ValidableContract
 * @package App\Support\Validable
 */
interface ValidableContract
{
    /**
     * Get the validated data from input.
     *
     * @return array
     */
    public function getValidatedData(): array;
}
