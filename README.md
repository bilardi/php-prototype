# PHP prototype

This package contains a script with the main functions for getting options and running something.
It is part of the [educational repositories](https://github.com/pandle/materials) to learn how to write stardard code and common uses of the TDD.

See the development of this code step by step with [see-git-steps](https://github.com/bilardi/see-git-steps).

## Installation

The package is self-consistent but if you want to test it-self, you download some vendors
- Download [composer](https://getcomposer.org/)
- Download vendors
```./path/composer.phar install
```

## Usage

Read the unit tests in [test](test) directory to use it. This is a best practice.

## Development

The PHP language is very permissive, so it exists a [PHP Standards Recommendations](http://www.php-fig.org/psr/) (PSR)
- Test with PHP_CodeSniffer at least a PSR2 level
```./vendor/bin/phpcs
```
- Resolve error of PSR levels
```./vendor/bin/phpcbf
```

It is common use to test the code step by step and PHPunit is a good beginning for unit test and functional test
- Test with PHPunit
```./vendor/bin/phpunit
```

## License

This package is released under the MIT license.  See [LICENSE](LICENSE) for details.

