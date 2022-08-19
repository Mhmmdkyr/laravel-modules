<?php

namespace Mhmmdkyr\Modules\Lumen;

use Mhmmdkyr\Modules\FileRepository;

class LumenFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
