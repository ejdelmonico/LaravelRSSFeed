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
        $this->assertObjectHasAttribute('cache_location', $settings);
//        $this->assertObjectHasAttribute('cache_life', $settings);
//        $this->assertObjectHasAttribute('enable_cache', $settings);
        $this->assertObjectHasAttribute('item_limit', $settings);
        $this->assertObjectHasAttribute('strip_htmltags', $settings);
        $this->assertObjectHasAttribute('strip_attributes', $settings);
        $this->assertObjectHasAttribute('force_feed', $settings);
        $this->assertObjectHasAttribute('order_by_date', $settings);
//        $this->assertObjectHasAttribute('strip_comments', $settings);
//        $this->assertObjectHasAttribute('set_timeout', $settings);
    }
}
