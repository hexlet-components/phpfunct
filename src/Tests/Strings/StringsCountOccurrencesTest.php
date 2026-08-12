<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsCountTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsCountOccurrencesTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringCountOccurrences()
    {
        $out = [];

        $out[] = ['foo', 'bar', 0];
        $out[] = ['foo', 'foo', 1];
        $out[] = ['foofoo', 'foo', 2];
        $out[] = ['bar foo bar foo', 'bar', 2];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $substring
     * @param int    $expected
     */
    #[DataProvider('dataStringCountOccurrences')]
    public function testStringCountOccurrences($input, $substring, $expected)
    {
        $this->assertEquals($expected, Strings\countOccurrences($input, $substring));
    }
}
