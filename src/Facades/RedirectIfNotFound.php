<?php

namespace Fuelviews\RedirectIfNotFound\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fuelviews\RedirectIfNotFound\RedirectIfNotFound
 */
class RedirectIfNotFound extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Fuelviews\RedirectIfNotFound\RedirectIfNotFound::class;
    }
}
