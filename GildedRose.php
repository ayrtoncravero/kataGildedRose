<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private $items;

    protected array $arrayItems;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(factory $factory): void
    {
        $this->arrayItems[0] = $factory::typeItem("Aged Brie", 5, 1);
    }
}
