<?php

namespace Infamoustrey\Cobalt\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Infamoustrey\Cobalt\Cobalt
 */
class Cobalt extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Infamoustrey\Cobalt\Cobalt::class;
    }
}
