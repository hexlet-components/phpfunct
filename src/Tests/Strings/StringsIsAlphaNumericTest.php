<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsIsAlphaNumericTest
 *
 * @package Funct\Tests\Strings
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringsIsAlphaNumericTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringIsAlphaNumeric()
    {
        $out = [];

        $out[] = ['foo', true];
        $out[] = ['Foo', true];
        $out[] = ['fôõ', false];
        $out[] = ['f()°', false];
        $out[] = ['f00', true];
        $out[] = ['123', true];
        $out[] = ['1.23', false];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param bool $expected
     */
    #[DataProvider('dataStringIsAlphaNumeric')]
    public function testStringIsAlphaNumeric($input, $expected)
    {
        $this->assertEquals($expected, Strings\isAlphaNumeric($input));
    }
}
