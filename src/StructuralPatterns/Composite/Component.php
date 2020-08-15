<?php

namespace App\StructuralPatterns\Composite;

abstract class Component
{
    /**
     * @param Component $component
     * @return void
     */
    abstract public function add(Component $component);

    /**
     * @param int|string $index
     * @return Component|null
     */
    abstract public function getChild($index);

    /**
     * @return Composite|null
     */
    public function getComposite()
    {
        return null;
    }

    /**
     * @return void
     */
    abstract public function operation();

    /**
     * @param int|string $index
     * @return Component|null
     */
    abstract public function remove($index);
}
