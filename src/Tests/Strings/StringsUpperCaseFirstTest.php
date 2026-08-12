<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsUpperCaseFirstTest
 *
 * @package Funct\Tests\Strings
 * @author Aurimas Niekis <aurimas@niekis.lt>
*/
class StringsUpperCaseFirstTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringUpperCaseFirst()
    {
        $out = [];

        $out[] = ['foo', 'Foo'];
        $out[] = ['fOO', 'FOO'];
        $out[] = ['Foo', 'Foo'];

        return $out;
    }

    /**
     *
     * @param $input
     * @param $expected
     */
    #[DataProvider('dataStringUpperCaseFirst')]
    public function testStringUpperCaseFirst($input, $expected)
    {
        $this->assertEquals($expected, Strings\upperCaseFirst($input));
    }
}
