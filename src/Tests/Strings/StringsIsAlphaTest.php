<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsIsAlphaTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsIsAlphaTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringIsAlpha()
    {
        $out = [];

        $out[] = ['foo', true];
        $out[] = ['Foo', true];
        $out[] = ['fôõ', false];
        $out[] = ['f()°', false];
        $out[] = ['f00', false];
        $out[] = ['123', false];
        $out[] = ['1.23', false];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param bool $expected
     */
    #[DataProvider('dataStringIsAlpha')]
    public function testStringIsAlpha($input, $expected)
    {
        $this->assertEquals($expected, Strings\isAlpha($input));
    }
}
