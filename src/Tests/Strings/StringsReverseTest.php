<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsReverseTest
 *
 * @package Funct\Tests\Strings
 * @author  Rod Elias <rod@wgo.com.br>
 */
class StringsReverseTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringReverse()
    {
        $out = [];

        $out[] = ['rod', 'dor'];
        $out[] = ['hello world', 'dlrow olleh'];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $expected
     */
    #[DataProvider('dataStringReverse')]
    public function testStringReverse($input, $expected)
    {
        $this->assertEquals($expected, Strings\reverse($input));
    }
}
