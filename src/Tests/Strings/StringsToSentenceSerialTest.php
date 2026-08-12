<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsToSentenceSerialTest
 *
 * @package Funct\Tests\Strings
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class StringsToSentenceSerialTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringToSentenceSerial()
    {
        $out = [];

        $out[] = [
            [
                ['a', 'b'],
            ],
            'a and b'
        ];

        $out[] = [
            [
                ['a', 'b', 'c'],
            ],
            'a, b, and c'
        ];

        $out[] = [
            [
                ['a', 'b', 'c'],
                '# ',
                ' unt '
            ],
            'a# b# unt c'
        ];

        return $out;
    }

    #[DataProvider('dataStringToSentenceSerial')]
    public function testStringToSentenceSerial($given, $expected)
    {
        $this->assertSame($expected, call_user_func_array('Funct\Strings\toSentenceSerial', $given));
    }
}
