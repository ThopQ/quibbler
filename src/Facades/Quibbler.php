<?php

namespace TILABS\Quibbler\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TILABS\Quibbler\Quibbler
 */
class Quibbler extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \TILABS\Quibbler\Quibbler::class;
    }
}
