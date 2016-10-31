<?php

namespace ejdelmonico\LaravelRSSFeed\helpers;

/**
 * Copyright (c) 2016. E J Del Monico and Del Monico Web Services LLC. All rights reserved.
 */
use SimplePie;

/**
 * Class SetUp
 *
 * @package \packages\ejdelmonico\LaravelRSSFeed\helpers
 */
class SimplePieSetUp
{
    protected $feed;

    public function __construct()
    {
        $this->feed = new SimplePie();
    }

    /**
     * Load the config array.
     *
     * @param array $config
     */
    public function loadConfig(array $config)
    {
        if (isset($config['cache.location'])) {
            $this->feed->set_cache_location($config['cache.location']);
        }
        if (isset($config['cache.life'])) {
            $this->feed->set_cache_duration($config['cache.life']);
        }
        if (isset($config['cache.enabled'])) {
            $this->feed->enable_cache($config['cache.enabled']);
        }
        if (isset($config['item_limit'])) {
            $this->feed->set_item_limit($config['item_limit']);
        }
        if (isset($config['strip_htmltags.enabled'])) {
            $this->feed->strip_htmltags($config['strip_htmltags.tags']);
        }
        if (isset($config['strip_attributes.enabled'])) {
            $this->feed->strip_attributes($config['strip_attributes.tags']);
        }
        if (isset($config['force_feed.enabled'])) {
            $this->feed->force_feed($config['force_feed.enabled']);
        }
        if (isset($config['order_by_date.enabled'])) {
            $this->feed->enable_order_by_date($config['order_by_date.enabled']);
        }
        if (isset($config['strip_html_comments.enabled'])) {
            $this->feed->strip_comments($config['strip_html_comments.enabled']);
        }
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
