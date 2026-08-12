<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionFlattenTest
 *
 * @package Funct\Tests\Collection
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class CollectionFlattenTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionFlatten()
    {
        $out = [];

        $out[] = [
            ['a', 'b', ['c']],
            ['a', 'b', 'c']
        ];

        $out[] = [
            ['a', ['b', ['c']]],
            ['a', 'b', 'c'],
            2
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', 'd'],
            3
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', ['d']],
            2
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', ['c', ['d']]],
        ];

        $out[] = [
            [['a'], 'b', ['c', 'd'], ['e', ['j']]],
            ['a', 'b', 'c', 'd', 'e', ['j']],
        ];

        return $out;
    }

    #[DataProvider('dataCollectionFlatten')]
    public function testCollectionFlatten($given, $expected, $depth = 1)
    {
        $this->assertEquals($expected, Collection\flatten($given, $depth));
    }
}
