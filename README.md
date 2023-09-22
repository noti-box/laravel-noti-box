# Laravel Noti Box

<img src="https://mynotibox.com/build/assets/logo-21d5fc0c.png" alt="Noti Box Logo" style="width:200px;"/>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/noti-box/laravel-noti-box.svg?style=flat-square)](https://packagist.org/packages/noti-box/laravel-noti-box)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/noti-box/laravel-noti-box/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/noti-box/laravel-noti-box/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/noti-box/laravel-noti-box/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/noti-box/laravel-noti-box/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/noti-box/laravel-noti-box.svg?style=flat-square)](https://packagist.org/packages/noti-box/laravel-noti-box)

This is a package to use in your Laravel application to send a message to a Noti Box channel.

Register for an account at [mynotibox.com](https://mynotibox.com/) and get your channel ID from the [channels section](https://mynotibox.com/channels). 


## Installation

You can install the package via composer:

```bash
composer require noti-box/laravel-noti-box
```

## Usage

```php
use NotiBox\Facades\NotiBox;

NotiBox::channel('UUID')
    ->message('My message to read out.')
    ->send();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [James Mills](https://github.com/noti-box)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
