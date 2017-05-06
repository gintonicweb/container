# Container

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
