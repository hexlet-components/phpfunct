<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionFlattenAllTest
 *
 * @package Funct\Tests\Collection
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class CollectionFlattenAllTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionFlattenAll()
    {
        $out = [];

        $out[] = [
            ['a', 'b', ['c']],
            ['a', 'b', 'c']
        ];

        $out[] = [
            ['a', ['b', ['c']]],
            ['a', 'b', 'c'],
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', 'd'],
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', 'd'],
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', 'd'],
        ];

        return $out;
    }

    #[DataProvider('dataCollectionFlattenAll')]
    public function testCollectionFlattenAll($given, $expected)
    {
        $this->assertEquals($expected, Collection\flattenAll($given));
    }
}
