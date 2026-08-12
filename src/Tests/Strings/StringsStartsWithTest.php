<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsStartsWithTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsStartsWithTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringStartsWith()
    {
        $out = [];

        $out[] = ['foo', 'bar', false];
        $out[] = ['foo', 'foo', true];
        $out[] = ['foo bar', 'foo', true];
        $out[] = ['foo bar', 'bar', false];
        $out[] = [' foo', 'foo', false];


        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $substring
     * @param bool   $expected
     */
    #[DataProvider('dataStringStartsWith')]
    public function testStringStartsWith($input, $substring, $expected)
    {
        $this->assertEquals($expected, Strings\startsWith($input, $substring));
    }
}
