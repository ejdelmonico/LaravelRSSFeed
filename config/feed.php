<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cache Location
    |--------------------------------------------------------------------------
    |
    | Filesystem path to use for caching.
    |
    */
    'cache_location'           => storage_path().'/framework/cache',

    /*
    |--------------------------------------------------------------------------
    | Cache Life
    |--------------------------------------------------------------------------
    |
    | Cache (2 Days or whatever you decide), in seconds.
    |
    */
    'cache_life'               => env('FEED_CACHE_LIFE', 17280),

    /*
    |--------------------------------------------------------------------------
    | Cache Enabled
    |--------------------------------------------------------------------------
    |
    | Whether cache is enabled.
    |
    */
    'enable_cache'             => env('FEED_CACHE_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Item Limit
    |--------------------------------------------------------------------------
    |
    | Set the number of items to retrieve.
    |
    */
    'item_limit'               => env('FEED_ITEM_LIMIT', 3),

    /*
    |--------------------------------------------------------------------------
    | Strip HTML Tags
    |--------------------------------------------------------------------------
    |
    | Set whether to strip out HTML tags.
    |
    */
    'strip_htmltags.enabled'   => env('STRIP_HTMLTAGS_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | HTML Tags to Strip
    |--------------------------------------------------------------------------
    |
    | Set the HTML tags to strip.
    |
    */
    'strip_htmltags'           => [
        'base',
        'blink',
        'body',
        'doctype',
        'embed',
        'font',
        'form',
        'frame',
        'frameset',
        'html',
        'iframe',
        'input',
        'marquee',
        'meta',
        'noscript',
        'object',
        'param',
        'script',
        'style',
    ],

    /*
    |--------------------------------------------------------------------------
    | Strip HTML Attributes
    |--------------------------------------------------------------------------
    |
    | Set whether to strip out HTML attributes.
    |
    */
    'strip_attributes.enabled' => env('STRIP_ATTRIBUTES_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | HTML Tags to Strip
    |--------------------------------------------------------------------------
    |
    | Set the HTML tags to strip.
    |
    */
    'strip_attributes'         => [
        'bgsound',
        'class',
        'expr',
        'id',
        'style',
        'onclick',
        'onerror',
        'onfinish',
        'onmouseover',
        'onmouseout',
        'onfocus',
        'onblur',
        'lowsrc',
        'dynsrc',
    ],

    /*
    |--------------------------------------------------------------------------
    | Force Feed
    |--------------------------------------------------------------------------
    |
    | Set whether to enable force feed.
    |
    */
    'force_feed'               => env('FORCE_FEED', false),

    /*
    |--------------------------------------------------------------------------
    | Order By Date
    |--------------------------------------------------------------------------
    |
    | Set whether to reverse the order by date.
    |
    */
    'order_by_date'            => env('ORDER_BY_DATE', true),

    /*
    |--------------------------------------------------------------------------
    | Strip HTML Comments
    |--------------------------------------------------------------------------
    |
    | Set whether to strip HTML comments.
    |
    */
    'strip_comments'           => env('STRIP_HTML_COMMENTS', false),

    /*
    |--------------------------------------------------------------------------
    | Set Request Timeout
    |--------------------------------------------------------------------------
    |
    | Set the feed request timeout.
    |
    */
    'set_timeout'              => env('SET_REQUEST_TIMEOUT', 30),
];
