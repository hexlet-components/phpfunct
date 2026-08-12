<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsChompRightTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsChompRightTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringChompRight()
    {
        $out = [];

        $out[] = ['foo', 'bar', 'foo'];
        $out[] = ['foo', 'foo', ''];
        $out[] = ['foo bar', 'foo', 'foo bar'];
        $out[] = ['foo bar', 'bar', 'foo '];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $suffix
     * @param string $expected
     */
    #[DataProvider('dataStringChompRight')]
    public function testStringChompRight($input, $suffix, $expected)
    {
        $this->assertEquals($expected, Strings\chompRight($input, $suffix));
    }
}
