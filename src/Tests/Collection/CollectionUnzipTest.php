<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionUnzipTest
 *
 * @package Funct\Tests\Collection
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class CollectionUnzipTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionUnzip()
    {
        $out = [];

        $out[] = [
            [['moe', 'larry', 'curly'], [30, 40, 50], [true, false, false]],
            [['moe', 30, true], ['larry', 40, false], ['curly', 50, false]]
        ];

        $out[] = [
            [['moe', 'larry'], [30, 40, 50], [true, false]],
            [['moe', 30, true], ['larry', 40, false], [null, 50, null]]
        ];

        return $out;
    }

    #[DataProvider('dataCollectionUnzip')]
    public function testCollectionUnzip($given, $expected)
    {
        $this->assertEquals($expected, Collection\unzip($given));
    }
}
