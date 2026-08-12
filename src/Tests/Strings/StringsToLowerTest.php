<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsToLowerTest
 *
 * @package Funct\Tests\Strings
 * @author Rod Elias <rod@wgo.com.br>
*/
class StringsToLowerTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringToLower()
    {
        $out = [];

        $out[] = ['FOO', false, 'foo'];
        $out[] = ['FOO', true, 'foo'];
        $out[] = ['bAr', false, 'bar'];
        $out[] = ['bAr', true, 'bar'];
        $out[] = ['foo', false, 'foo'];
        $out[] = ['foo', true, 'foo'];
        $out[] = ['ĄČĘĖĮŠŲŪŽ', true, 'ąčęėįšųūž'];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param bool $mb
     * @param bool $expected
     */
    #[DataProvider('dataStringToLower')]
    public function testStringToLower($input, $mb, $expected)
    {
        $this->assertEquals($expected, Strings\toLower($input, $mb));
    }
}