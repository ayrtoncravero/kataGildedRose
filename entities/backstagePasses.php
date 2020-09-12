<?php

use GildedRose\Item;

class backstagePasses extends Item
{
    public function __construct(string $name, int $sell_in, int $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateQuality(string $name, int $sell_in, int $quality): Item
    {
        $moreQualityX1 = 1;
        $moreQualityX2 = 2;
        $moreQualityX3 = 3;
        $expiredQuality = 0;

        if ($this->quality < 50) {
            if ($this->sell_in >= 10) {
                return new backstagePasses($this->name, $this->sell_in, $this->quality + $moreQualityX1);
            }
            elseif ($this->sell_in <= 10) {
                return new backstagePasses($this->name, $this->sell_in, $this->quality + $moreQualityX2);
            }
            elseif ($this->sell_in <= 5) {
                return new backstagePasses($this->name, $this->sell_in, $this->quality + $moreQualityX3);
            }
            elseif ($this->sell_in <= 0) {
                return new backstagePasses($this->name, $this->sell_in, $this->quality = $expiredQuality);
            }
        }
        else {
            echo "La calidad del item no puede ser mayor a 50";
        }
    }

    public function sellIn(string $name, int $sell_in, int $quality): Item
    {
        $oneDay = 1;

        return new backstagePasses($this->name, $this->sell_in - $oneDay, $this->quality);
    }
}