<?php

namespace GildedRose;
use agedBrie;
use backstagePasses;
use sulfuras;
use conjured;

class factory
{
    public function typeItem(string $name, int $sellIn, int $quality): Item {
        switch ($name) {
            case "Aged Brie":
                return new agedBrie($name, $sellIn, $quality);
            case "Backstage passes":
                return new backstagePasses($name, $sellIn, $quality);
            case "Sulfuras":
                return new sulfuras($name, $sellIn, $quality);
            case "conjured":
                return new conjured($name, $sellIn, $quality);
            default:
                echo "¡Ese item no es valido!";
        }
    }
}