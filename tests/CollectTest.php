<?php

use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    public function testKeys()
    {
        $collection = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $this->assertEquals(['a', 'b', 'c'], $collection->keys()->toArray());
    }

    public function testValues()
    {
        $collection = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $this->assertEquals([1, 2, 3], $collection->values()->toArray());
    }

    public function testGet()
    {
        $collection = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $this->assertEquals(2, $collection->get('b'));
    }

    public function testExcept()
    {
        $collection = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $this->assertEquals(['a' => 1, 'c' => 3], $collection->except('b')->toArray());
    }
}