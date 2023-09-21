<?php

namespace NotiBox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NotiBox\NotiBox
 */
class NotiBox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NotiBox\NotiBox::class;
    }
}
