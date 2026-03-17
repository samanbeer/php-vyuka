<?php

$cislo1 = 55;
const CISLO2 = 110;
$cislo_text = "55";

echo "Součet: " . ($cislo1 + CISLO2) . "\n";
echo "Součin: " . ($cislo1 * CISLO2) . ". Dělení: " . (CISLO2 / $cislo1);

if (CISLO2 < $cislo1) {
    echo "\n číslo " . $cislo1 . " je větší něž číslo " . CISLO2;
}
else if (CISLO2 > $cislo1) {
    echo "\nčíslo1 (" . $cislo1 . ") je menší něž číslo2 (" . CISLO2 . ")";
}
else {
    echo "\n Čísla jsou stejná";
}

if ($cislo1 === 100) {
    echo "Cislo je 100";
}

echo "\n\n\n";
if ($cislo1 == $cislo_text) {
    echo "PRAVDA";
}

?>