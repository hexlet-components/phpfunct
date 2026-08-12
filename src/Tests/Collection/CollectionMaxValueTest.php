<?php

namespace Funct\Tests\Collection;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Collection;

/**
 * Class CollectionMaxValueTest
 *
 * @package Funct\Tests\Collection
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class CollectionMaxValueTest extends \PHPUnit\Framework\TestCase
{
    public static function dataCollectionMaxValue()
    {
        $out = [];

        $out[] = [
            [
                [
                    10 => [
                        'title' => 'a',
                        'size'  => 1
                    ],
                    20 => [
                        'title' => 'b',
                        'size'  => 2
                    ],
                    30 => [
                        'title' => 'c',
                        'size'  => 3
                    ]
                ],
                function ($item) {
                    return $item['size'];
                }
            ],
            [
                'title' => 'c',
                'size'  => 3
            ]
        ];

        return $out;
    }

    #[DataProvider('dataCollectionMaxValue')]
    public function testCollectionMaxValue($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\Collection\maxValue', $given));
    }
}
