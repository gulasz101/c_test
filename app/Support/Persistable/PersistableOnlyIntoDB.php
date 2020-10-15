<?php

declare(strict_types=1);

namespace App\Support\Persistable;

/**
 * Trait PersistableOnlyIntoDB
 * @package App\Support\Persistable
 */
trait PersistableOnlyIntoDB
{
    /**
     * Persist entity into data store.
     */
    public function persist(): void
    {
        $this->save();
    }
}
