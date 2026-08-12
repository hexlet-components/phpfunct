<?php

namespace Funct\Tests;

use Funct as Funct;

/**
 * Class FalseTest
 *
 * @package Funct\Tests
 * @author Aurimas Niekis <aurimas@niekis.lt>
*/
class FalseTest extends \PHPUnit\Framework\TestCase
{
    public function testFalse()
    {
        $value = false;

        $this->assertTrue(Funct\false($value));
    }

    public function testTrue()
    {
        $value = true;

        $this->assertFalse(Funct\false($value));
    }
}
