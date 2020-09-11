<?php

use GildedRose\Item;

class cruced extends Item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateQuality(string $name): int
    {
        // TODO: Implement updateQuality() method.
    }

    public function sellIn(string $name): int
    {
        // TODO: Implement sellIn() method.
    }
}