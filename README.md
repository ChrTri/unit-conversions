# Package to perform unit conversion in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/spatie/unit-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/unit-conversions/run-tests?label=tests)](https://github.com/spatie/unit-conversions/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/spatie/unit-conversions)


This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require chrtri/unit-conversions
```

## Usage

``` php
include('vendor/autoload.php');

echo \ChrTri\UnitConversions\Weight::fromKilograms(100)->toLbs() . PHP_EOL;
```

## Testing

``` bash
call vendor/bin/phpunit UnitTest tests/WeightTest.php
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email xxx@xxx.xx instead of using the issue tracker.

## Credits

- [chrtri](https://github.com/chrtri)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
