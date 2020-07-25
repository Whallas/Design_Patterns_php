<?php


namespace App\StructuralPatterns\Composite\Sample;


use Tightenco\Collect\Support\Collection;

class CompositeEquipment extends Equipment
{
    /**
     * @var Collection|Equipment[]
     */
    public $_equipment;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->_equipment = new Collection();
    }

    /**
     * @return float
     */
    public function power()
    {
        return $this->_equipment->reduce(function ($acc, Equipment $equipment) {
            return $acc + $equipment->power();
        }, 0);
    }

    /**
     * @return float
     */
    public function netPrice()
    {
        return $this->_equipment->reduce(function ($acc, Equipment $equipment) {
            return $acc + $equipment->netPrice();
        }, 0);
    }

    /**
     * @return float
     */
    public function discountPrice()
    {
        return $this->_equipment->reduce(function ($acc, Equipment $equipment) {
            return $acc + $equipment->discountPrice();
        }, 0);
    }

    /**
     * @param Equipment $equipment
     * @return void
     */
    public function add(Equipment $equipment)
    {
        $this->_equipment->push($equipment);
    }

    /**
     * @param Equipment $equipment
     * @return void
     */
    public function remove(Equipment $equipment)
    {
        $this->_equipment = $this->_equipment->reject(function (Equipment $item) use ($equipment) {
            return $item === $equipment;
        });
    }
}