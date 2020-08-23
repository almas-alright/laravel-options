<?php

namespace Alright\Options\Facades;

use Illuminate\Support\Facades\Facade;

class Options extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'options';
    }
}
