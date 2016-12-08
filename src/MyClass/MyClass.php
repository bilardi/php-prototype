<?php

namespace MyClass;

/**
 * Class of an example
 *
 * An example of class that it extends an abstract class and it implements an interface.
 * There is a boolean pun by foo function of abstract class, bar function of interface class,
 * and foobar function of this class.
 *
 * @license MIT
 * @author Alessandra Bilardi <alessandra.bilardi@gmail.com>
 * @see https://github.com/bilardi/php-prototype for details
 */
class MyClass
{
    protected $bar;

    /**
     * Constructs the object
     *
     * @param boolean $foobar
     * @return object
     */
    public function __construct($bar = true)
    {
        $this->bar = (bool)$bar;
    }
}
