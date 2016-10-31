<?php

namespace ejdelmonico\LaravelRSSFeed;

use Illuminate\Support\Facades\Facade;

/**
 * Class FeedFacade.
 */
class FeedFacade extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'feed';
    }
}
