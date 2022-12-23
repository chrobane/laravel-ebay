<?php
/**
 * Created by PhpStorm.
 * User: haroonkhan
 * Date: 5/22/17
 * Time: 3:19 PM
 */

namespace Chrobane\LaravelEbay\Facade;


use Illuminate\Support\Facades\Facade;

class Ebay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ebay';
    }
}