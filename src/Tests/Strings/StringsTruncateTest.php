<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsTruncateTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsTruncateTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringTruncate()
    {
        $out = [];

        $out[] = ['foo', 3, '…', 'foo' ];
        $out[] = ['foo bar', 3, '...', 'foo...' ];
        $out[] = ['foo bar', 5, '---', 'foo ---' ];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $length
     * @param string $chars
     * @param string $expected
     */
    #[DataProvider('dataStringTruncate')]
    public function testStringTruncate($input, $length, $chars, $expected)
    {
        $this->assertEquals($expected, Strings\truncate($input, $length, $chars));
    }
}
