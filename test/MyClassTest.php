<?php

namespace MyClass\Test;

use MyClass\MyClass;

/**
 * Test class of MyClass
 *
 * This is a basic unit test class. It is important to create a test for each public function.
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
}
