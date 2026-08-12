<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsRightTest
 *
 * @package Funct\Tests\Strings
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class StringsRightTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringRight()
    {
        $out = [];

        $out[] = [
            [
                'My name is FOOBAR',
                6
            ],
            'FOOBAR'
        ];

        $out[] = [
            [
                'Hi',
                0
            ],
            ''
        ];

        $out[] = [
            [
                'My name is FOOBAR',
                -2
            ],
            'My'
        ];

        return $out;
    }

    #[DataProvider('dataStringRight')]
    public function testStringRight($given, $expected)
    {
        $this->assertSame($expected, call_user_func_array('Funct\Strings\right', $given));
    }
}
