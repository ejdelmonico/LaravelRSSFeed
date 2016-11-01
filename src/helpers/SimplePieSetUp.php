<?php

namespace ejdelmonico\LaravelRSSFeed\helpers;

use SimplePie;

/**
 * SimplePie SetUp.
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
     *
     * @return \SimplePie
     */
    public function loadConfig()
    {
        $this->feed->set_cache_location(config('feed.cache.location'));
        $this->feed->set_cache_duration(config('cache.life'));
        $this->feed->enable_cache(config('cache.enabled'));
        $this->feed->set_item_limit(config('item_limit'));
        $this->feed->strip_htmltags(config('strip_htmltags.tags'));
        $this->feed->strip_attributes(config('strip_attributes.tags'));
        $this->feed->force_feed(config('force_feed.enabled'));
        $this->feed->enable_order_by_date(config('order_by_date.enabled'));
        $this->feed->strip_comments(config('strip_html_comments.enabled'));

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
