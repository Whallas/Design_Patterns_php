<?php

namespace App\StructuralPatterns\Composite;

use Exception;

class Leaf extends Component
{
    public function operation()
    {
        echo "Leaf operation\n";
    }

    public function add(Component $component)
    {
        throw new Exception();
    }

    public function getChild($index)
    {
        throw new Exception();
    }

    public function remove($index)
    {
        throw new Exception();
    }
}
