<?php

namespace Src\Support;

/**
 * @template T
 */
class Collection
{
    /** @var array<int, T>  */
    public array $items = [];

    /**
     * @param T $item
     *
     * @return self<T>;
     */
    public function add($item): self
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return T
     */
    public function first()
    {
        return $this->items[0];
    }
}
