<?php

namespace ejdelmonico\LaravelRSSFeed\tests;

class FeedTest extends TestCase
{
    public function testFeedByUrl()
    {
        $url = 'https://blog.errordetective.com/rss/';
        $feeder = $this->feed->makeRequest($url);

        $this->assertNotNull($feeder);
        $this->assertInstanceOf('ejdelmonico\LaravelRSSFeed\Feed', $this->feed);
    }
}
