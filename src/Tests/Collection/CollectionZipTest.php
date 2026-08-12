<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionZipTest
 *
 * @package Funct\Tests\Collection
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class CollectionZipTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionZip()
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

    #[DataProvider('dataCollectionZip')]
    public function testCollectionZip($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\Collection\zip', $given));
    }
}
