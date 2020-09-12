<?php

use GildedRose\Item;

class sulfuras extends Item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateQuality(string $name, int $sell_in, int $quality): Item
    {
        return new sulfuras($this->name, $this->sell_in, $this->quality);
    }

    public function sellIn(string $name, int $sell_in, int $quality): Item
    {
        return new sulfuras($this->name, $this->sell_in, $this->quality);
    }
}