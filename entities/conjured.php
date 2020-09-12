<?php

use GildedRose\Item;

class conjured extends Item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateQuality(string $name, int $sell_in, int $quality): Item
    {
        $moreQuality = 2;

        if ($this->quality > 0) {
            return new conjured($this->name, $this->sell_in, $this->quality - $moreQuality);
        }
        elseif ($this->quality === 0) {
            echo "La calidad es 0, no se puede desgastar mas";
        }
        elseif ($this->quality < 0) {
            echo "La calidad no puede ser negativa";
        }
    }

    public function sellIn(string $name, int $sell_in, int $quality): Item
    {
        $oneDay = 1;
        return new conjured($this->name, $this->sell_in - $oneDay, $this->quality);
    }
}