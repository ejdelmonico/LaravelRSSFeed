# Laravel RSS Feed Parser

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-scrutinizer]][link-scrutinizer]
[![StyleCI Status][ico-styleci]][link-styleci]
[![Total Downloads][ico-downloads]][link-downloads]


This project is crafted to be as standard as possible for its small usage in Laravel 5 applications. It was inspired by a need to pull in blog posts for use in Laravel Blade templates.

## Installation

The LaravelRSSFeed package is installed by requiring the package in your `composer.json`. You can either do it via composer install
```
composer require ejdelmonico/LaravelRSSFeed
```
or by simply including it.
```
{
  "require": {
    "ejdelmonico/LaravelRSSFeed": "1.*"
  }
}
```

## Configuration

To use the package, you must register the service provider:
```
// In config/app.php

'providers' => [
  // ...
  ejdelmonico\LaravelRSSFeed\LaravelRSSFeedServiceProvider::class,
],

'aliases' => [
  // ...
  'Feed' => ejdelmonico\LaravelRSSFeed\FeedFacade::class,
],
```

## Usage

```
php artisan vendor:publish --provider="ejdelmonico\LaravelRSSFeed\LaravelRSSFeedServiceProvider" --tag=config
```
This section is still in development.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ejdelmonico@gmail.com instead of using the issue tracker.

## Credits

- [E J Del Monico][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ejdelmonico/LaravelRSSFeed.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ejdelmonico/LaravelRSSFeed/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/g/ejdelmonico/LaravelRSSFeed.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/72316992/shield?style=flat
[ico-downloads]: https://img.shields.io/packagist/dt/ejdelmonico/LaravelRSSFeed.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ejdelmonico/LaravelRSSFeed
[link-travis]: https://travis-ci.org/ejdelmonico/LaravelRSSFeed
[link-scrutinizer]: https://scrutinizer-ci.com/g/ejdelmonico/LaravelRSSFeed/?branch=master
[link-styleci]: https://styleci.io/repos/72316992?style=flat
[link-downloads]: https://packagist.org/packages/ejdelmonico/LaravelRSSFeed
[link-author]: https://github.com/ejdelmonico
[link-contributors]: ../../contributors
