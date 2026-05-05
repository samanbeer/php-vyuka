<?php
$sest = [];
for ($i = 50; $i <= 150; $i++) {
    if ($i % 6 == 0) {
        $sest[] = $i;
    }
}

$pocet = count($sest);
echo "Počet prvků v poli 'sest' je: $pocet \n\n ";

$druhePole = [];
foreach ($sest as $cislo) {
    if ($cislo % 10 == 2) {
        $druhePole[] = $cislo;
    }
}

echo "Prvky druhého pole: ";
foreach ($druhePole as $prvek) {
    echo "{$prvek} ";
}
echo "\n\n";

$soucet = 0;
foreach ($druhePole as $hodnota) {
    $soucet += $hodnota;
}
echo "Součet prvků v druhém poli je: $soucet \n\n";

foreach ($sest as $klic => $hodnota) {
    if ($hodnota >= 100 && $hodnota <= 999) {
        $sest[$klic] = $hodnota + 10;
    }
}

echo "Pole 'sest' od konce: ";
for ($i = count($sest) - 1; $i >= 0; $i--) {
    echo "{$sest[$i]} ";
}
?>