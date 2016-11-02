<?php

namespace ejdelmonico\LaravelRSSFeed;

use ejdelmonico\LaravelRSSFeed\helpers\SimplePieSetUp;

class FeedFactory
{
    protected $config;
    protected $feeder;

    /**
     * Create a new Feed Instance.
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @param $url
     *
     * @return \ejdelmonico\LaravelRSSFeed\helpers\SimplePieSetUp
     */
    public function makeRequest($url)
    {
        $this->feeder = new SimplePieSetUp();
        $this->feeder->loadConfig($this->config);
        $this->feeder->setRSSFeedUrl($url);
        $this->feeder->init();
        $this->feeder->handleContentType();

        return $this->feeder;
    }
}
