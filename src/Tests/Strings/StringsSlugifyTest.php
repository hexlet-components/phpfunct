<?php

namespace Funct\Tests\Strings;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Strings;

/**
 * Class StringsSlugifyTest
 *
 * @package Funct\Tests\Strings
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class StringsSlugifyTest extends \PHPUnit\Framework\TestCase
{
    public static function dataStringSlugify()
    {
        $out = [];

        $out[] = [
            'Global Thermonuclear Warfare',
            'global-thermonuclear-warfare'
        ];

        $out[] = [
            'Crème brûlée',
            'creme-brulee'
        ];

        return $out;
    }

    #[DataProvider('dataStringSlugify')]
    public function testStringSlugify($given, $expected)
    {
        $this->assertSame($expected, Strings\slugify($given));
    }
}
