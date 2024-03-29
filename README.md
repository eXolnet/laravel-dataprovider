# laravel-dataprovider

[![Latest Stable Version](https://poser.pugx.org/eXolnet/laravel-dataprovider/v/stable?format=flat-square)](https://packagist.org/packages/eXolnet/laravel-dataprovider)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/eXolnet/laravel-dataprovider/master.svg?style=flat-square)](https://travis-ci.org/eXolnet/laravel-dataprovider)
[![Total Downloads](https://img.shields.io/packagist/dt/eXolnet/laravel-dataprovider.svg?style=flat-square)](https://packagist.org/packages/eXolnet/laravel-dataprovider)

Code and Database data provider

## Installation

Require this package with composer:

```
composer require exolnet/laravel-dataprovider
```

If you don't use package auto-discovery, add the service provider to the ``providers`` array in `config/app.php`:

```
Exolnet\DataProvider\DataProviderServiceProvider::class
```

And the facade to the ``facades`` array in `config/app.php`: 

```
'DataProvider' => Exolnet\DataProvider\DataProviderFacade::class
```

## Usage

Explain how to use your package.

## Testing

To run the phpUnit tests, please use:

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE OF CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@exolnet.com instead of using the issue tracker.

## Credits

- [Simon Gaudreau](https://github.com/Gandhi11)
- [All Contributors](../../contributors)

## License

This code is licensed under the [MIT license](http://choosealicense.com/licenses/mit/). 
Please see the [license file](LICENSE) for more information.
