<?php

namespace Funct\Tests\Objects;

use Funct\Object as Obj;

/**
 * Class AssignIfIssetTest
 *
 * @package Funct\Tests\Objects
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class AssignIfIssetTest extends \PHPUnit\Framework\TestCase
{

    public function testMethod()
    {
        $object = new \stdClass();
        $array = [];

        Obj\assignIfIsset($object, 'foo', $array, 'bar');

        $this->assertObjectNotHasProperty('foo', $object);

        $array = ['bar' => 'foobar'];

        Obj\assignIfIsset($object, 'foo', $array, 'bar');
        $this->assertObjectHasProperty('foo', $object);
        $this->assertSame('foobar', $object->foo);
    }
}
