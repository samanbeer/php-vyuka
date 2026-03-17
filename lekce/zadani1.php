<?php

$a = 20;
$b = 20;
$c = 15;
$e = 0;
echo "a = {$a}, b={$b}, c={$c}\n";

if (($a + $b) < $c){
  //echo "Trojůhelník nelze sestrojit";  
  die("Trojuhelnik nelze sestavit");
}

if($a === $b && $a !== $c){
    echo "\nTrojuhleník je rovnoramenný";
}
else if($a === $c && $a === $b && $b === $c){
    echo "trojuhleník ej rovnostrranný\n";
}
else{
    echo "Trojúhelník je obecný";
}
$e = sqrt($a);

echo "\n{$e}";

echo "\n\n";


?>