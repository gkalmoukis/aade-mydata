<?php

namespace Gkalmoukis\AadeMydata\Facades;

use Illuminate\Support\Facades\Facade;

class AadeMydata extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'aademydata';
    }
}