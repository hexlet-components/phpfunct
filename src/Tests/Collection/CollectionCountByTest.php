<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionCountByTest
 *
 * @package Funct\Tests\Collection
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class CollectionCountByTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionCountBy()
    {
        $out = [];

        $out[] = [
            [
                [
                    ['color' => 'red', 'title' => 'foo'],
                    ['color' => 'red', 'title' => 'bar'],
                    ['color' => 'green', 'title' => 'foo'],
                    ['color' => 'green', 'title' => 'bar'],
                    ['color' => 'blue', 'title' => 'foo'],
                    ['color' => 'blue', 'title' => 'bar'],
                ],
                'color'
            ],
            [
                'red'   => 2,
                'green' => 2,
                'blue'  => 2
            ]
        ];

        $out[] = [
            [
                [
                    ['color' => 'red', 'title' => 'foo'],
                    ['color' => 'red', 'title' => 'bar'],
                    ['color' => 'green', 'title' => 'foo'],
                    ['color' => 'green', 'title' => 'bar'],
                    ['color' => 'blue', 'title' => 'foo'],
                    ['color' => 'blue', 'title' => 'bar'],
                ],
                function ($item) {
                    return $item['color'];
                }
            ],
            [
                'red'   => 2,
                'green' => 2,
                'blue'  => 2
            ]
        ];

        return $out;
    }

    #[DataProvider('dataCollectionCountBy')]
    public function testCollectionCountBy($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\Collection\countBy', $given));
    }
}
