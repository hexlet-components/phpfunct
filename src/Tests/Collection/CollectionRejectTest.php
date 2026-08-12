<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionRejectTest
 *
 * @package Funct\Tests\Collection
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class CollectionRejectTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionReject()
    {
        $out = [];

        $out[] = [
            [1, 2, 3, 4, 5, 6],
            function ($item) {
                return ($item % 2) == 0;
            },
            [1, 2 => 3, 4 => 5]
        ];

        return $out;
    }

    #[DataProvider('dataCollectionReject')]
    public function testCollectionReject($given, $callback, $expected)
    {
        $this->assertEquals($expected, Collection\reject($given, $callback));
    }
}
