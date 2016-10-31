<?php
namespace ejdelmonico\LaravelRSSFeed;

/**
 * Copyright (c) 2016. E J Del Monico and Del Monico Web Services LLC. All rights reserved.
 */

use Illuminate\Support\Facades\Facade;

/**
 * Class FeedFacade
 *
 * @package \packages\ejdelmonico\LaravelRSSFeed\src
 */
class FeedFacade extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'feed';
    }
}
