<?php

namespace App\StructuralPatterns\Composite;

class Program
{
    public function __invoke()
    {
        $composite = new Composite();
        $leaf = new Leaf();
        /**
         * @var Component $component
         */
        $component = null;
        /**
         * @var Composite $test
         */
        $test = null;

        $component = $composite;
        if ($test = $component->getComposite()) {
            $test->add(new Leaf());
            $test->operation();
        }

        $component = $leaf;
        if ($test = $component->getComposite()) {
            $test->add(new Leaf()); // Will not add leaf
            $test->operation();
        }
    }
}