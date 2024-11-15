<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Sendeo extends Facade
{
    /**
     * Facade'in bağlı olduğu servis konteynerindeki anahtar.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sendeo-client'; // Service container ile aynı isim
    }
}
