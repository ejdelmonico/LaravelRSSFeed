<?php
namespace ejdelmonico\LaravelRSSFeed\tests;

/**
 * Copyright (c) 2016. E J Del Monico and Del Monico Web Services LLC. All rights reserved.
 */

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use ejdelmonico\LaravelRSSFeed\LaravelRSSFeedServiceProvider;
use ejdelmonico\LaravelRSSFeed\Feed;

abstract class TestCase extends OrchestraTestCase
{
    protected $feed;

    public function setUp()
    {
        parent::setUp();

        $this->feed = new Feed(['cache.enabled' => false]);
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelRSSFeedServiceProvider::class,
        ];
    }


}
