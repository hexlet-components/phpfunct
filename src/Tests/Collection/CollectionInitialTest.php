<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionInitialTest
 *
 * @package Funct\Tests\Collection
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class CollectionInitialTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionInitial()
    {
        $out = [];

        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [1, 2, 3, 4, 5, 6, 7, 8], 1];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [1, 2, 3, 4, 5, 6, 7], 2];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [1, 2, 3, 4], 5];

        return $out;
    }

    #[DataProvider('dataCollectionInitial')]
    public function testCollectionInitial($given, $expected, $n)
    {
        $this->assertEquals($expected, Collection\initial($given, $n));
    }
}
