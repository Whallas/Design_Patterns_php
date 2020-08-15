<?php

namespace App\StructuralPatterns\Composite\Sample;

abstract class Equipment
{
    private $name;

    /**
     * Equipment constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    abstract public function power();

    /**
     * @return float
     */
    abstract public function netPrice();

    /**
     * @return float
     */
    abstract public function discountPrice();

    /**
     * @param Equipment $equipment
     * @return void
     */
    abstract public function add(Equipment $equipment);

    /**
     * @param Equipment $equipment
     * @return void
     */
    abstract public function remove(Equipment $equipment);
}
