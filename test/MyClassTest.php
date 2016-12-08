<?php

namespace MyClass\Test;

use MyClass\MyClass;

/**
 * Test class of MyClass
 *
 * This is a basic unit test class. There is a test for each public function.
 * If the functions contained conditions, there would be more tests for each public function.
 *
 * @license MIT
 * @author Alessandra Bilardi <alessandra.bilardi@gmail.com>
 * @see https://github.com/bilardi/php-prototype for details
 */
class MyClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verifies if the class MyClass can be created
     */
    public function testMyClassCanBeCreated()
    {
        $myClass = new MyClass();
    }

    /**
     * Verifies if the class MyClass gets the bar value correctly
     */
    public function testMyClassGetsBarValue()
    {
        $myClass = new MyClass();
        $this->assertTrue($myClass->bar());

        $myClass = new MyClass(true);
        $this->assertTrue($myClass->bar());

        $myClass = new MyClass(false);
        $this->assertFalse($myClass->bar());
    }

    /**
     * Verifies if the class MyClass gets the foo value correctly
     */
    public function testMyClassGetsFooValue()
    {
        $myClass = new MyClass();
        $this->assertFalse($myClass->foobar());

        $myClass = new MyClass(true);
        $this->assertFalse($myClass->foobar());

        $myClass = new MyClass(false);
        $this->assertTrue($myClass->foobar());
    }

    /**
     * Verifies if the class MyClass gets the baz value correctly
     */
    public function testMyClassGetsBazValue()
    {
        $myClass = new MyClass();
        $tests = [];

        for ($i = 0; $i < 10; $i++) {
            array_push($tests, $myClass->baz());
        }

        $this->assertContainsOnly('boolean', $tests);
    }
}
