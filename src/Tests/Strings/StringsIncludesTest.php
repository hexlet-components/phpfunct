<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsIncludesTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsIncludesTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringIncludes()
    {
        $out = [];

        $out[] = ['foo', 'bar', false];
        $out[] = ['foo bar', 'bar', true];
        $out[] = ['foo bar', 'foo', true];
        $out[] = ['foo&%$bar@;/', 'bar', true];
        $out[] = ['foo BAR', 'bar', false];
        
        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $substring
     * @param string $expected
     */
    #[DataProvider('dataStringIncludes')]
    public function testStringIncludes($input, $substring, $expected)
    {
        $this->assertEquals($expected, Strings\includes($input, $substring));
    }
}
