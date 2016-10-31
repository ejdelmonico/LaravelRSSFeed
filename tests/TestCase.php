<?php

namespace ejdelmonico\LaravelRSSFeed\tests;

use ejdelmonico\LaravelRSSFeed\Feed;
use ejdelmonico\LaravelRSSFeed\FeedFacade;
use ejdelmonico\LaravelRSSFeed\LaravelRSSFeedServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $feed;

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            LaravelRSSFeedServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
          'Feed' => FeedFacade::class,
        ];
    }

    public function setUp()
    {
        parent::setUp();

        $this->feed = new Feed(['cache.enabled' => false]);
    }
}
