<?php

namespace jc21\Collections;

use Iterator;
use IteratorAggregate;
use jc21\Util\Item;
use jc21\Movies\Movie;
use jc21\TV\Show;
use jc21\Iterators\ItemIterator;

/**
 * Collection to store Items
 */
class ItemCollection implements IteratorAggregate
{
    /**
     * Collections array
     *
     * @var array
     */
    private array $collection;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->collection = [];
    }

    /**
     * Method to get the count of items in the collection
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->collection);
    }

    /**
     * Method to get data at a position
     *
     * @param int $position
     *
     * @return null|Movie|Show|Season|Episode|Artist|Album|Track
     */
    public function getData(int $position = 0)
    {
        if (isset($this->collection[$position])) {
            return $this->collection[$position];
        }

        return null;
    }

    /**
     * Method to add a Item to the collection
     *
     * @param Item $Item
     */
    public function addData(Item $Item)
    {
        $this->collection[] = $Item;
    }

    /**
     * Method to get an iterator for the collection
     *
     * @return ItemIterator
     *
     * {@inheritDoc}
     */
    public function getIterator(): Iterator
    {
        return new ItemIterator($this);
    }
}
