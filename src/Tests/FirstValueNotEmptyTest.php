<?php

namespace Funct\Tests;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct as Funct;

/**
 * Class FirstValueNotEmptyTest
 *
 * @package Funct\Tests
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class FirstValueNotEmptyTest extends \PHPUnit\Framework\TestCase
{
    public static function dataFirstValueNotEmpty()
    {
        $out = [];

        $out[] = [
            ['', 'Foo', 'bar'],
            'Foo'
        ];

        $out[] = [
            ['foo', 'bar'],
            'foo'
        ];

        $out[] = [
            ['', '', 'bar'],
            'bar'
        ];

        $out[] = [
            ['', '', ''],
            null
        ];

        return $out;
    }

    /**
     *
     * @param array  $arguments
     * @param string $expected
     */
    #[DataProvider('dataFirstValueNotEmpty')]
    public function testFirstValueNotEmpty($arguments, $expected)
    {
        $output = call_user_func_array(
            'Funct\\firstValueNotEmpty',
            $arguments
        );

        $this->assertEquals($expected, $output);
    }
}
