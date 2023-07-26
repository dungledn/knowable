<?php

namespace Kyle\Bigzero\Facades;

use Illuminate\Support\Facades\Facade;

class Knowledge extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'know';
    }
}