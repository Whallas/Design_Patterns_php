<?php

namespace App\StructuralPatterns\Composite;

use Tightenco\Collect\Support\Collection;

class Composite extends Component
{
    /**
     * @var Collection|Component[]
     */
    private $children;

    public function __construct()
    {
        $this->children = new Collection();
    }

    /**
     * @param Component $component
     * @return void
     */
    public function add(Component $component)
    {
        $this->children->add($component);
    }

    /**
     * @param int|string $index
     * @return Component|null
     */
    public function getChild($index)
    {
        return $this->children->get($index);
    }

    /**
     * @return Composite
     */
    public function getComposite()
    {
        return $this;
    }

    public function operation()
    {
        echo "Composite operation\n";
        $this->children->each(function (Component $child) {
            $child->operation();
        });
    }

    /**
     * @param int|string $index
     * @return Component|null
     */
    public function remove($index)
    {
        return $this->children->pull($index);
    }
}
