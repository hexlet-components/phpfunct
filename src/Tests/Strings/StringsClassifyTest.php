<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsClassifyTest
 *
 * @package Funct\Tests\Strings
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class StringsClassifyTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringClassify()
    {
        $out = [];

        $out[] = ['foo_bar', 'FooBar'];
        $out[] = ['foo-bar', 'FooBar'];
        $out[] = ['foo bar', 'FooBar'];
        $out[] = ['foo1bar', 'Foo1Bar'];
        $out[] = ['FooBar', 'FooBar'];
        $out[] = ['foo', 'Foo'];
        $out[] = ['a_', 'A'];
        $out[] = ['a-', 'A'];

        return $out;
    }

    /**
     *
     * @param string $input
     * @param string $expected
     */
    #[DataProvider('dataStringClassify')]
    public function testStringClassify($input, $expected)
    {
        $this->assertEquals($expected, Strings\classify($input));
    }
}
