<?php

namespace NotiBox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NotiBox\NotiBox
 *
 * @method static \NotiBox\NotiBox channel(string $channel)
 * @method static \NotiBox\NotiBox message(string $message)
 * @method static bool send()
 */
class NotiBox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NotiBox\NotiBox::class;
    }
}
