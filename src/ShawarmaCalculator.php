<?php

declare(strict_types=1);

namespace OurShawarma;

class ShawarmaCalculator
{
    private float $totalPrice = 0;
    private $totalIngredients = [];

    public function add(Shawarma $shawarma)
    {
        $this->totalPrice += $shawarma->getCost();
        $this->totalIngredients = array_merge($this->totalIngredients, $shawarma->getIngredients());
    }

    public function getTotalIngredients(): array
    {
        return array_unique($this->totalIngredients);
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }
}
