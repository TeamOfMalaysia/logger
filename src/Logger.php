<?php namespace TeamOfMalaysia\Logger;
/**
 * Class Logger - Description
 *
 * @package Illuminate\Support\Facades\Logger
 * @author TeamOfMalaysia <lwl@outlook.com>
 */
class Logger extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'logger'; }
}