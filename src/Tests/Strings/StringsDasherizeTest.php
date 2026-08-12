<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsDasherizeTest
 *
 * @package Funct\Tests\Strings
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class StringsDasherizeTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringDasherize()
    {
        $out = [];

        $out[] = [
            'a_farewell_to_arms',
            'a-farewell-to-arms'
        ];

        $out[] = [
            'capsLock',
            'caps-lock'
        ];

        return $out;
    }

    #[DataProvider('dataStringDasherize')]
    public function testStringDasherize($given, $expected)
    {
        $this->assertSame($expected, Strings\dasherize($given));
    }
}
