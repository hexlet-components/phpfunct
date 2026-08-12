<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsCollapseWhiteSpaceTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsCollapseWhitespaceTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringCollapseWhitespace()
    {
        $out = [];

        $out[] = ['foo   bar', 'foo bar'];
        $out[] = ['  foo bar   ', ' foo bar '];
        $out[] = ['foo   bar        ', 'foo bar '];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $expected
     */
    #[DataProvider('dataStringCollapseWhitespace')]
    public function testStringCollapseWhitespace($input, $expected)
    {
        $this->assertEquals($expected, Strings\collapseWhitespace($input));
    }
}
