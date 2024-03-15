<?php

namespace App\Providers;

use App\Contracts\Interfaces\DivisionInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Repositories\DivisionRepository;
use App\Contracts\Repositories\StudentRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        StudentInterface::class => StudentRepository::class,
        DivisionInterface::class => DivisionRepository::class
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) $this->app->bind($index, $value);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
