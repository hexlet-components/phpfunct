<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsBetweenTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsBetweenTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringBetween()
    {
        $out = [];

        $out[] = ['foo', '<test>', '</test>', ''];
        $out[] = ['<test>foo</test>', '<test>', '</test>', 'foo'];
        $out[] = ['foo <test>bar</test>', '<test>', '</test>', 'bar'];
        $out[] = ['foo<test></test>bar', '<test>', '</test>', ''];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $left
     * @param string $right
     * @param string $expected
     */
    #[DataProvider('dataStringBetween')]
    public function testStringBetween($input, $left, $right, $expected)
    {
        $this->assertEquals($expected, Strings\between($input, $left, $right));
    }
}
