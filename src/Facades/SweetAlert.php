<?php

/*
 * This file is part of Laravel Sweet Alert.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SweetAlert\Facades;

use Illuminate\Support\Facades\Facade;

class SweetAlert extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'sweet-alert';
    }
}
