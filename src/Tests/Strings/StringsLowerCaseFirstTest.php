<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsLowerCaseFirstTest
 *
 * @package Funct\Tests\Strings
 * @author Aurimas Niekis <aurimas@niekis.lt>
*/
class StringsLowerCaseFirstTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringLowerCaseFirst()
    {
        $out = [];

        $out[] = ['Foo', 'foo'];
        $out[] = ['FOO', 'fOO'];
        $out[] = ['foo', 'foo'];

        return $out;
    }

    /**
     *
     * @param $input
     * @param $expected
     */
    #[DataProvider('dataStringLowerCaseFirst')]
    public function testStringLowerCaseFirst($input, $expected)
    {
        $this->assertEquals($expected, Strings\lowerCaseFirst($input));
    }
}
