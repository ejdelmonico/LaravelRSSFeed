<?php
namespace ejdelmonico\LaravelRSSFeed\tests;
/**
 * Copyright (c) 2016. E J Del Monico and Del Monico Web Services LLC. All rights reserved.
 */

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use ejdelmonico\LaravelRSSFeed\LaravelRSSFeedServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    public function setUp()
    {
//        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelRSSFeedServiceProvider::class,
        ];
    }


}
