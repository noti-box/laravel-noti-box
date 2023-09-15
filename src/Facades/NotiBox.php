<?php

namespace NotiBox\NotiBox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NotiBox\NotiBox\NotiBox
 */
class NotiBox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NotiBox\NotiBox\NotiBox::class;
    }
}
