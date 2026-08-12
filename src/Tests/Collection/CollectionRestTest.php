<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionRestTest
 *
 * @package Funct\Tests\Collection
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class CollectionRestTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionRest()
    {
        $out = [];

        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [2, 3, 4, 5, 6, 7, 8, 9], 1];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [3, 4, 5, 6, 7, 8, 9], 2];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [6, 7, 8, 9], 5];

        return $out;
    }

    #[DataProvider('dataCollectionRest')]
    public function testCollectionRest($given, $expected, $from)
    {
        $this->assertEquals($expected, Collection\rest($given, $from));
    }
}
