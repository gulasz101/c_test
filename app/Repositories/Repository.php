<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Support\Persistable\PersistableContract as Persistable;

/**
 * Class Repository
 * @package App\Repositories
 */
abstract class Repository
{
    /**
     * Persist entity into data store.
     * @param Persistable $persistable
     */
    protected function persist(Persistable $persistable): void
    {
        $persistable->persist();
    }
}
