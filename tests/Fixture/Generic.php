<?php

namespace Gintonic\Test\Fixture;

use Gintonic\ContainerTrait;
use Psr\Container\ContainerInterface;

class Generic implements ContainerInterface
{
    use ContainerTrait;

    public function something()
    {
        return 'content';
    }
}
