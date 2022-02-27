<?php

namespace Brandonjjon\Carton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Brandonjjon\Carton\Carton
 */
class Carton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'carton';
    }
}
