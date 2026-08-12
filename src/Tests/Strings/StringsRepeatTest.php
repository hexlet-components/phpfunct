<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsRepeatTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsRepeatTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringRepeat()
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
     * @param int    $n
     * @param string $expected
     */
    #[DataProvider('dataStringRepeat')]
    public function testStringRepeat($input, $n, $expected)
    {
        $this->assertEquals($expected, Strings\repeat($input, $n));
    }
}
