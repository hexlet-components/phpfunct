<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionForEveryTest
 *
 * @package Funct\Tests\Collection
 * @author Aurimas Niekis <aurimas@niekis.lt>
*/
class CollectionForEveryTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionForEvery()
    {
        $out = [];

        $out[] = [
            [
                ['a', 'b', 'c'],
                'strtoupper'
            ],
            ['A', 'B', 'C']
        ];

        $out[] = [
            [
                ['a', 'b', 'c'],
                function ($item, $prefix) {
                    return $prefix . $item;
                },
                '1'
            ],
            ['1a', '1b', '1c']
        ];

        return $out;
    }

    #[DataProvider('dataCollectionForEvery')]
    public function testCollectionForEvery($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\Collection\forEvery', $given));
    }
}
