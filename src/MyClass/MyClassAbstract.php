<?php

namespace MyClass;

/**
 * Abstract of MyClass
 *
 * An example of class that it extends an abstract class and it implements an interface.
 * There is a boolean pun by foo function of abstract class, bar function of interface class,
 * and foobar function of this class.
 *
 * @license MIT
 * @author Alessandra Bilardi <alessandra.bilardi@gmail.com>
 * @see https://github.com/bilardi/php-prototype for details
 */
abstract class MyClassAbstract
{
    /**
     * Get random boolean
     *
     * @return boolean
     */
    public function baz()
    {
        return (bool)rand(0, 1);
    }

    /**
     * Foo
     *
     * @return boolean
     */
    abstract protected function foo($foo);
}
