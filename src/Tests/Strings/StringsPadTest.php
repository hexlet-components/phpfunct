<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsPadTest
 *
 * @package Funct\Tests\Strings
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class StringsPadTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringPad()
    {
        $out = [];

        $out[] = [['hello', 5], 'hello'];
        $out[] = [['hello', 10], '  hello   '];
        $out[] = [['hey', 7], '  hey  '];
        $out[] = [['hey', 5], ' hey '];
        $out[] = [['hey', 4], 'hey '];
        $out[] = [['hey', 7, '-'], '--hey--'];

        return $out;
    }

    #[DataProvider('dataStringPad')]
    public function testStringPad($given, $expected)
    {
        $this->assertSame($expected, call_user_func_array('Funct\Strings\pad', $given));
    }
}
