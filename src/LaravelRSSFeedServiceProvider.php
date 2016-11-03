<?php

namespace ejdelmonico\LaravelRSSFeed;

use Illuminate\Support\ServiceProvider;

class LaravelRSSFeedServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    protected $source;

    /**
     * Bootstrap the package events.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__.'/../config/feed.php');

        $this->publishes(
            [
                $source => config_path('feed.php'),
            ],
            'config'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $source = realpath(__DIR__.'/../config/feed.php');
        $this->mergeConfigFrom($source, 'feed');

        $this->app->singleton(
            'feed',
            function () {
                $config = config('feed');

                if (! $config) {
                    throw new \RuntimeException(
                        'Configuration not available. Run `php artisan vendor:publish '
                        .'--provider="ejdelmonico\LaravelRSSFeed\LaravelRSSFeedServiceProvider" --tag=config`'
                    );
                }

                return new FeedFactory($config);
            }
        );

        $this->app->alias('feed', FeedFactory::class);
    }

    /**
     * Get the services from provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['feed', FeedFactory::class];
    }
}
