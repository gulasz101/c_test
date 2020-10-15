<?php

declare(strict_types=1);

namespace App\Support\Persistable;

/**
 * Interface PersistableContract
 * @package App\Support\Persistable
 */
interface PersistableContract
{
    /**
     * Persist entity into data store.
     */
    public function persist(): void;
}
