<?php

declare(strict_types=1);

namespace GildedRose;

abstract class Item
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $sell_in;

    /**
     * @var int
     */
    protected $quality;

    public function __construct(string $name, int $sell_in, int $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    abstract function updateQuality(string $name, int $sell_in, int $quality): Item;

    abstract function sellIn(string $name, int $sell_in, int $quality): Item;

    protected function __toString(): string
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}
