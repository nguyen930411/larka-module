<?php
namespace Nguyen930411\Module\Facades;

use Illuminate\Support\Facades\Facade;

class MenuFrontend extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'menu-frontend';
    }
}
