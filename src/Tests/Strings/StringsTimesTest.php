<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsTimesTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsTimesTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringTimes()
    {
        $out = [];

        $out[] = ['foo', 0, ''];
        $out[] = ['foo', 1, 'foo'];
        $out[] = ['foo', 3, 'foofoofoo'];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $n
     * @param string $expected
     */
    #[DataProvider('dataStringTimes')]
    public function testStringTimes($input, $n, $expected)
    {
        $this->assertEquals($expected, Strings\times($input, $n));
    }
}
