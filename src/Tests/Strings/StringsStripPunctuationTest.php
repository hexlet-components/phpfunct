<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsStripPunctuationTest
 *
 * @package Funct\Tests\Strings
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class StringsStripPunctuationTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringStripPunctuation()
    {
        $out = [];

        $out[] = [
            'My, st[ring] *full* of %punct)',
            'My string full of punct'
        ];

        return $out;
    }

    #[DataProvider('dataStringStripPunctuation')]
    public function testStringStripPunctuation($given, $expected)
    {
        $this->assertSame($expected, Strings\stripPunctuation($given));
    }
}
