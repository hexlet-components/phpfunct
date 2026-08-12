<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsSwapCase
 *
 * @package Funct\Tests\Strings
 * @author Rod Elias <rod@wgo.com.br>
*/
class StringsSwapCaseTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringSwapCase()
    {
        $out = [];

        $out[] = ['foo', false, 'FOO'];
        $out[] = ['bAr', false, 'BaR'];
        $out[] = ['FOO', false, 'foo'];
        $out[] = ['FoO', false, 'fOo'];
        $out[] = ['foo', true, 'FOO'];
        $out[] = ['bAr', true, 'BaR'];
        $out[] = ['FOO', true, 'foo'];
        $out[] = ['FoO', true, 'fOo'];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param bool $mb
     * @param bool $expected
     */
    #[DataProvider('dataStringSwapCase')]
    public function testStringSwapCase($input, $mb, $expected)
    {
        $this->assertEquals($expected, Strings\swapCase($input, $mb));
    }
}
