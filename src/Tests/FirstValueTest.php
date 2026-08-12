<?php

namespace Funct\Tests;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct as Funct;

/**
 * Class FirstValueTest
 *
 * @package Funct\Tests
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class FirstValueTest extends \PHPUnit\Framework\TestCase
{
    public static function dataFirstValue()
    {
        $out = [];

        $out[] = [
            ['', 'Foo', 'bar'],
            ''
        ];

        $out[] = [
            ['foo', 'bar'],
            'foo'
        ];

        $out[] = [
            [null, null, 'bar'],
            'bar'
        ];

        $out[] = [
            [null],
            null
        ];

        return $out;
    }

    /**
     *
     * @param array  $arguments
     * @param string $expected
     */
    #[DataProvider('dataFirstValue')]
    public function testFirstValue($arguments, $expected)
    {
        $output = call_user_func_array(
            'Funct\\firstValue',
            $arguments
        );

        $this->assertEquals($expected, $output);
    }
}
