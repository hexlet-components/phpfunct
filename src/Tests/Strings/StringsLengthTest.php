<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsLengthTest
 *
 * @package Funct\Tests\Strings
 * @author  Rod Elias <rod@wgo.com.br>
 */
class StringsLengthTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringLength()
    {
        $out = [];

        $out[] = ['rod', true, 3];
        $out[] = ['rod', false, 3];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $expected
     */
    #[DataProvider('dataStringLength')]
    public function testStringLength($input, $mb, $expected)
    {
        $this->assertEquals($expected, Strings\Length($input, $mb));
    }
}
