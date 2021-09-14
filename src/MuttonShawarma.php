<?php

declare(strict_types=1);

namespace OurShawarma;

use OurShawarma;

class MuttonShawarma extends Shawarma
{
    public function __construct(
        string $title = 'Шаурма из Баранины',
        array $ingredients = ['острый соус', 'огурцы маринованные', 'кинза', 'помидоры свежие',
            'маринованный лук с барбарисом и зеленью', 'мясо баранины', 'лаваш арабский'],
        float $cost = 85
    ) {
        parent:: __construct($title, $ingredients, $cost);
    }
}
