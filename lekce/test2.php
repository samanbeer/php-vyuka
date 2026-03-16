<?php

$cislo1 = 110;
const CISLO2 = 110;

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
?>