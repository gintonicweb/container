<?php

namespace Gintonic\Test;

use Gintonic\Test\Fixture\Generic;
use PHPUnit\Framework\TestCase;

class ContainerTraitTest extends TestCase
{
    /** @test */
    public function hasReturnsTrue()
    {
        $this->assertTrue((new Generic)->has('something'));
    }

    /** @test */
    public function hasReturnsFalse()
    {
        $this->assertFalse((new Generic)->has('else'));
    }

    /** @test */
    public function getReturnsExected()
    {
        $this->assertEquals('content', (new Generic)->get('something'));
    }

    /** @test @expectedException \Error */
    public function getThrowsError()
    {
        (new Generic)->get('else');
    }
}
