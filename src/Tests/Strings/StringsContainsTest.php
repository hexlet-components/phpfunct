<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsContainsTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsContainsTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringContains()
    {
        $out = [];

        $out[] = ['foo', 'bar', false];
        $out[] = ['foo bar', 'bar', true];
        $out[] = ['foo bar', 'FOO', false];
        $out[] = ['*¤²foo&%$bar@;/', 'foo', true];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $substring
     * @param bool   $expected
     */
    #[DataProvider('dataStringContains')]
    public function testStringContains($input, $substring, $expected)
    {
        $this->assertEquals($expected, Strings\contains($input, $substring));
    }
}
