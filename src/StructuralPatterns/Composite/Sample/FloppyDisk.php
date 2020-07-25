<?php


namespace App\StructuralPatterns\Composite\Sample;


use Exception;

class FloppyDisk extends Equipment
{
    /**
     * @return float
     */
    public function power()
    {
        return mt_rand(5, 10);
    }

    /**
     * @return float
     */
    public function netPrice()
    {
        return mt_rand(5, 10);
    }

    /**
     * @return float
     */
    public function discountPrice()
    {
        return mt_rand(1, 5);
    }

    /**
     * @param Equipment $equipment
     * @return void
     * @throws Exception
     */
    public function add(Equipment $equipment)
    {
        throw new Exception();
    }

    /**
     * @param Equipment $equipment
     * @return void
     * @throws Exception
     */
    public function remove(Equipment $equipment)
    {
        throw new Exception();
    }
}