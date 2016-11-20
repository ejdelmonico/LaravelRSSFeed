<?php

namespace ejdelmonico\LaravelRSSFeed;

use ejdelmonico\LaravelRSSFeed\helpers\SimplePieSetUp;

class FeedFactory
{
    /** @var array */
    protected $config;

    /** @var object */
    protected $feeder;

    /**
     * Load the config.
     *
     * @var array
     */
    public function __construct(array $config)
    {
        /* @var array $config */
        $this->config = $config;
    }

    /**
     * @param $url
     *
     * @return \ejdelmonico\LaravelRSSFeed\helpers\SimplePieSetUp
     */
    public function makeRequest($url)
    {
        /* @var object $this->feeder */
        $this->feeder = new SimplePieSetUp();

        /* add required options */
        $this->feeder->loadConfig($this->config);
        $this->feeder->setRSSFeedUrl($url);
        $this->feeder->init();
        $this->feeder->handleContentType();

        return $this->feeder;
    }
}
