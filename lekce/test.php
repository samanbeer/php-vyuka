<?php

declare(strict_types=1);

$promenna = 'Text';        
$cislo = 50;

echo "Číslo je {$cislo}\n";

$vysledek = match (true) {
    $cislo < 0 => 'menší jak 0',
    $cislo < 10 => '0 - 10',
    $cislo < 20 => ' - 20',
    $cislo < 30 => '20 - 30',
    default => 'vic jak 50',
};

echo "{$vysledek}\n";

echo "{$vysledek}\n";

echo "$promenna";
?>