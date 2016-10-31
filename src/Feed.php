<?php

namespace ejdelmonico\LaravelRSSFeed;

use ejdelmonico\LaravelRSSFeed\helpers\SimplePieSetUp;

class Feed
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

    public function makeRequest($url)
    {
        $this->feeder = new SimplePieSetUp();
        $this->feeder->loadConfig($this->config);
        $this->feeder->setRSSFeedUrl($url);
        $this->feeder->handleContentType();
        $this->feeder->init();

        return $this->feeder;
    }
}
