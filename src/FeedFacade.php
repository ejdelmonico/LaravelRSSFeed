<?php

namespace ejdelmonico\LaravelRSSFeed;

use Illuminate\Support\Facades\Facade;

/**
 * Class FeedFacade.
 */
class FeedFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'feed';
    }
}
