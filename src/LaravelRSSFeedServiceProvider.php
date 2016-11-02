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

    /**
     * Bootstrap the package events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(
            [
                __DIR__.'/../config/feed.php' => config_path('feed.php'),
            ],
            'config'
        );

        $this->mergeConfigFrom(__DIR__.'/../config/feed.php', 'feed');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
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
