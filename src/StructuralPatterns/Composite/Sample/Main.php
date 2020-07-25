<?php


namespace App\StructuralPatterns\Composite\Sample;


class Main
{
    public function __invoke()
    {
        $cabinet = new Cabinet('PC Cabinet');
        $chassis = new Chassis('PC Chassis');
        $cabinet->add($chassis);

        $bus = new Bus('MCA Bus');
        $bus->add(new Card('16Mbs Token Ring'));

        $chassis->add($bus);
        $chassis->add(new FloppyDisk('3.5in Floppy'));

        return "The net price is {$chassis->netPrice()}";
    }
}