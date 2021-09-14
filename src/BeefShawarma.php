<?php

declare(strict_types=1);

namespace OurShawarma;

use OurShawarma;

class BeefShawarma extends Shawarma
{
    public function __construct(
        string $title = 'Шаурма говяжья',
        array $ingredients = ['чесночный соус', 'говяжий окорок', 'огурцы маринованные',
            'маринованный лук с барбарисом и зеленью', 'салат коул слоу', 'тандырный лаваш', 'помидоры свежие',
            'хумус', 'соус тахин'],
        float $cost = 75
    ) {
        parent:: __construct($title, $ingredients, $cost);
    }
}
