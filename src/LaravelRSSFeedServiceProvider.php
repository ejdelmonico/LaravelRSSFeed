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
     */
    public function boot()
    {
        $configPath = __DIR__.'/../config/feed.php';

        $this->publishes(
            [
                $configPath => $this->getConfigPath(),
            ],
            'config'
        );
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $configPath = __DIR__.'/../config/feed.php';
        $this->mergeConfigFrom($configPath, 'feed');

        $this->app->singleton(
            'feed',
            function () {
                $config = config('feed');

                if (!$config) {
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
        return ['feed'];
    }

    /**
     * Get the config path.
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return config_path('feed.php');
    }
}
