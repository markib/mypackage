<?php

namespace bikram\mynewpack\Facades;

use Illuminate\Support\Facades\Facade;

class mynewpack extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mynewpack';
    }
}
