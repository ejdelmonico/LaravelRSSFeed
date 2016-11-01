<?php

namespace ejdelmonico\LaravelRSSFeed\tests;

use ejdelmonico\LaravelRSSFeed\helpers\SimplePieSetUp;

class FeedTest extends TestCase
{
    protected $config;
    protected $feeder;

    public function testFeedByUrl()
    {
        $url = 'https://blog.errordetective.com/rss/';
        $feed = $this->feed->makeRequest($url);

        $this->assertNotNull($feed);
        $this->assertInstanceOf('ejdelmonico\LaravelRSSFeed\Feed', $this->feed);
    }

    public function testLoadConfig()
    {
        $this->config = file('../config/feed.php');
        $this->feeder = new SimplePieSetUp();
        $settings = $this->feeder->loadConfig($this->config);

        $this->assertNotNull($settings);
        $this->assertNotEmpty($settings);
        $this->assertObjectHasAttribute('item_limit', $settings);
        $this->assertObjectHasAttribute('strip_attributes.tags', $settings);
    }
}
