<?php

$a = 10;
$b = 150;

$pole = [];
$pole2 = [];

$pocet_lichych_cisel = 0;
$pocet_cisel_kocicich_1_7 = 0;


for ($i = $a; $i < $b; $i++){
    if (($i % 2) !== 0){
        $pocet_lichych_cisel++;
    }
}
echo "\n{$pocet_lichych_cisel}";

for ($i = $a; $i < $b; $i++){
    if($i % 10 === 1 || $i % 10 === 7){
        $pocet_cisel_kocicich_1_7++;
    }
}
echo "\n{$pocet_cisel_kocicich_1_7}";

for ($i = $a; $i < $b; $i++){
    if ($i > 99 && $i < 500 && ($i % 5) === 0 ){
        $pole[] = $i;
    }
}

foreach ($pole as $hodnota ){
    echo "\n{$hodnota}";
}
if (count($pole2) === 0){
    echo "\nPole je prázdný";
}
