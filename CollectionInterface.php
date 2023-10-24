<?php

namespace Flitework\Contracts;

/**
 * Abstraction for a collection. It can be used to implement the behavior of
 * any object containing anything, with the ability to add, delete, count what
 * is contained inside
 * 
 * @author Ivan Mezinov <ivanmezinov@mail.ru>
 */
interface CollectionInterface extends \Countable, \IteratorAggregate
{
    /**
     * Add item to collection
     * 
     * @param string $id    Element being added
     */
    public function add(string $id);
    
    /**
     * Remove item from collection
     * 
     * @param string $id    Element to deleted
     */
    public function remove(string $id);
    
    /**
     * Gets all items from collection
     */
    public function all();
    
    /**
     * Removes all items from collection
     */
    public function clear();
}
