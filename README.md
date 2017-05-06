# Container

[![Build Status](https://img.shields.io/travis/gintonicweb/container/master.svg?style=flat-square)](https://travis-ci.org/gintonicweb/container)
[![Coverage](https://img.shields.io/codecov/c/github/gintonicweb/container.svg?style=flat-square)](https://codecov.io/github/gintonicweb/container)
[![Total Downloads](https://img.shields.io/packagist/dt/gintonic/container.svg?style=flat-square)](https://packagist.org/packages/gintonic/container)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)

The most minimalistic implementation of php [psr-11](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md)

## Install

Using Composer:

```
composer require gintonic/container
```

## Usage

The `ContainerTrait` class makes all methods accessible as container keys.

```
class Generic implements \Psr\Container\ContainerInterface
{
    use \Gintonic\ContainerTrait;

    public function something()
    {
        return 'content';
    }
}
```

The values are now accessible like this

```
$generic->has('something'); // returns true
$generic->get('something'); // returns 'content'
```
