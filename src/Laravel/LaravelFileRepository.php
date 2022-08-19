<?php

namespace Mhmmdkyr\Modules\Laravel;

use Mhmmdkyr\Modules\FileRepository;

class LaravelFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
