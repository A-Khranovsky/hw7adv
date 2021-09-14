<?php

declare(strict_types=1);

namespace OurShawarma;

use OurShawarma;

class OdessaShawarma extends Shawarma
{
    public function __construct(
        string $title = 'Шаурма Одесская',
        array $ingredients = ['огурцы маринованные', 'картофель жареный', 'чесночный соус', 'тандырный лаваш',
                                    'маринованный лук с барбарисом и зеленью', 'мясо куриное', 'салат коул слоу',
                                    'корейская морковь'],
        float $cost = 69
    ) {
        parent:: __construct($title, $ingredients, $cost);
    }
}
