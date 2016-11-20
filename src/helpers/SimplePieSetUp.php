<?php

namespace ejdelmonico\LaravelRSSFeed\helpers;

use SimplePie;

/**
 * SimplePie SetUp.
 */
class SimplePieSetUp
{
    protected $feed;

    /**
     * SimplePieSetUp constructor.
     */
    public function __construct()
    {
        $this->feed = new SimplePie();
    }


    /**
     * Load the config array.
     *
     * @param array $config
     *
     * @return \SimplePie
     */
    public function loadConfig(array $config)
    {
        $this->feed->set_cache_location($config['cache_location']);
        $this->feed->set_cache_duration($config['cache_life']);
        $this->feed->enable_cache($config['enable_cache']);
        $this->feed->set_item_limit($config['item_limit']);
        $this->feed->strip_htmltags($config['strip_htmltags']);
        $this->feed->strip_attributes($config['strip_attributes']);
        $this->feed->force_feed($config['force_feed']);
        $this->feed->enable_order_by_date($config['order_by_date']);
        $this->feed->strip_comments($config['strip_comments']);
        $this->feed->set_timeout($config['set_timeout']);

        return $this->feed;
    }

    /**
     * Init SimplePie.
     */
    public function init()
    {
        $this->feed->init();
    }

    /**
     * Set the feed url.
     *
     * @param $url
     */
    public function setRSSFeedUrl($url)
    {
        $this->feed->set_feed_url($url);
    }

    /**
     * Wrapper for MIME-types.
     */
    public function handleContentType()
    {
        $this->feed->handle_content_type();
    }
}
