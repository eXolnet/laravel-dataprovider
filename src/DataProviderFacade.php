<?php

namespace Exolnet\DataProvider;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Exolnet\DataProvider\DataProviderClass
 */
class DataProviderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'DataProvider';
    }
}
