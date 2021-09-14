<?php

declare(strict_types=1);

namespace OurShawarma;

abstract class Shawarma
{
    protected string $Title;
    protected array $Ingredients;
    protected float $Cost;

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->Cost;
    }

    /**
     * @return array
     */
    public function getIngredients(): array
    {
        return $this->Ingredients;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    public function __construct(string $_title, array $_ingredients, float $_coast)
    {
        $this->Title = $_title;
        $this->Ingredients = $_ingredients;
        $this->Cost = $_coast;
    }
}
