<?php

namespace Mhmmdkyr\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Mhmmdkyr\Modules\Contracts\RepositoryInterface;
use Mhmmdkyr\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
