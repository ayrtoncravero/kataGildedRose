<?php


use GildedRose\Item;

class agedBrie extends item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateQuality(string $name, int $sell_in, int $quality): Item
    {
        $moreQualityX1 = 1;

        if ($this->$quality < 50) {
            return new agedBrie($this->name, $this->sell_in, $this->quality + $moreQualityX1);
        }
        else {
            echo "La calidad del item no puede ser mayor a 50";
            return new agedBrie($this->name, $this->sell_in, $this->quality);
        }
    }

    public function sellIn(string $name, int $sell_in, int $quality): Item
    {
        $oneDay = 1;

        return new agedBrie($this->name, $this->sell_in - $oneDay, $this->quality);
    }
}