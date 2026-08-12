<?php

namespace Funct\Tests;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct as Funct;

/**
 * Class NotNullTest
 *
 * @package Funct\Tests
 * @author Aurimas Niekis <aurimas@niekis.lt>
*/
class NotNullTest extends \PHPUnit\Framework\TestCase
{
    public static function dataNotNull()
    {
        $out = [];

        $out[] = ['String', true];
        $out[] = [null, false];

        return $out;
    }


    /**
     *
     * @param mixed $input
     * @param bool  $expected
     */
    #[DataProvider('dataNotNull')]
    public function testNotNull($input, $expected)
    {
        $this->assertEquals($expected, Funct\notNull($input));
    }
}
