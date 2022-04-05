<?php namespace Pmilinvest\LaravelMondialRelay\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class LaravelMondialRelay
 * @package QuentinBontemps\LaravelMondialRelay\Facades
 */
class LaravelMondialRelay extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Pmilinvest\LaravelMondialRelay\Services\LaravelMondialRelay::class;
    }
}