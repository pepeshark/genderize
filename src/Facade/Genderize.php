<?php namespace Evilcorp\Genderize\Facade;

use Illuminate\Support\Facades\Facade;

class Genderize extends Facade {

    protected static function getFacadeAccessor() {
        return 'genderize';
    }

}