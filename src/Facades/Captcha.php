<?php

namespace Dalianmao\LaravelCaptcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dalianmao\LaravelCaptcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'captcha';
    }
}
