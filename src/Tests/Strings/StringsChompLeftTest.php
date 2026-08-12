<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;;

/**
 * Class StringsChompLeftTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsChompLeftTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringChompLeft()
    {
        $out = [];

        $out[] = ['foo', 'bar', 'foo'];
        $out[] = ['foo', 'foo', ''];
        $out[] = ['foo bar', 'foo', ' bar'];
        $out[] = ['foo bar', 'bar', 'foo bar'];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $prefix
     * @param string $expected
     */
    #[DataProvider('dataStringChompLeft')]
    public function testStringChompLeft($input, $prefix, $expected)
    {
        $this->assertEquals($expected, Strings\chompLeft($input, $prefix));
    }
}
