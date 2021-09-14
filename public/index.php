<?php

declare(strict_types=1);

namespace OurShawarma;

require_once '../vendor/autoload.php';

$beefShawarma = new BeefShawarma();
$muttonShawarma = new MuttonShawarma();
$odessaShawarma = new OdessaShawarma();

$buy = new ShawarmaCalculator();
$buy->add($beefShawarma);
$buy->add($muttonShawarma);
$buy->add($odessaShawarma);

echo 'Ингридиенты заказа:<br>';
foreach ($buy->getTotalIngredients() as $item) {
    echo $item . '<br>';
}
echo 'Общая стоимость: ' . $buy->getTotalPrice();
