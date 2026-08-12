<?php

namespace Funct\Tests;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct as Funct;

/**
 * Class NotEmptyTest
 *
 * @package Funct\Tests
 * @author Aurimas Niekis <aurimas@niekis.lt>
*/
class NotEmptyTest extends \PHPUnit\Framework\TestCase
{
    public static function dataNotEmpty()
    {
        $out = [];

        $out[] = ['String', true];
        $out[] = ['', false];

        return $out;
    }


    /**
     *
     * @param mixed $input
     * @param bool  $expected
     */
    #[DataProvider('dataNotEmpty')]
    public function testNotEmpty($input, $expected)
    {
        $this->assertEquals($expected, Funct\notEmpty($input));
    }
}
