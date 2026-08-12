<?php

namespace Funct\Tests\Invoke;

use PHPUnit\Framework\Attributes\DataProvider;

use Funct\Invoke;

/**
 * Class InvokeIfConditionTest
 *
 * @package Funct\Tests\Invoke
 * @author Aurimas Niekis <aurimas@niekis.lt>
 */
class InvokeIfConditionTest extends \PHPUnit\Framework\TestCase
{
    protected $callbackWasCalled;
    protected $callbackArguments;

    protected static $staticCallbackWasCalled;
    protected static $staticCallbackArguments;

    protected function setUp(): void
    {
        $this->callbackWasCalled = false;
        $this->callbackArguments = null;
        self::$staticCallbackWasCalled = false;
        self::$staticCallbackArguments = null;
    }

    public static function dataInvokeIf()
    {
        $out = [];

        $out[] = [[], true];
        $out[] = [[], false];
        $out[] = [['foo', 'bar'], true];
        $out[] = [['foo', 'bar'], false];

        return $out;
    }

    /**
     *
     * @param array $arguments
     * @param bool $condition
     */
    #[DataProvider('dataInvokeIf')]
    public function testInvokeIf($arguments, $condition)
    {
        Invoke\ifCondition([$this, 'fakeCallback'], $arguments, $condition);

        $should = $condition ? 'be' : 'not';

        $this->assertEquals($condition, $this->callbackWasCalled, 'The function should ' . $should . ' called');

        if (true === $condition) {
            $this->assertEquals($arguments, $this->callbackArguments);
        }
    }

    /**
     *
     * @param array $arguments
     * @param bool $condition
     */
    #[DataProvider('dataInvokeIf')]
    public function testInvokeIfWithStaticFunction($arguments, $condition)
    {
        Invoke\ifCondition([self::class, 'fakeStaticCallback'], $arguments, $condition);

        $should = $condition ? 'be' : 'not';

        $this->assertEquals($condition, self::$staticCallbackWasCalled, 'The function should ' . $should . ' called');

        if (true === $condition) {
            $this->assertEquals($arguments, self::$staticCallbackArguments);
        }
    }

    public function fakeCallback()
    {
        $this->callbackWasCalled = true;
        $this->callbackArguments = func_get_args();
    }

    public static function fakeStaticCallback()
    {
        self::$staticCallbackWasCalled = true;
        self::$staticCallbackArguments = func_get_args();
    }
}
