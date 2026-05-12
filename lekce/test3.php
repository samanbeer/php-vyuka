<?php   /*
$pole = ['Jablko', 'hruska', 'pomeranc'];
echo "{$pole[2]}";

foreach ($pole as $hodnota){
    echo "{$hodnota} \n";
}

$pole[] = 'banan';

for ($i = 0; $i < sizeof($pole); $i++){
    echo "{$pole[$i]} \n";
}
$a = 1;
while ($a < 6){
    echo "$a";
    $a++;
}*/
$pole3 = [];

for ($i = 1; $i <= 150; $i++){
    if ($i % 5 == 0){
        $pole3[] = $i;
        echo "{$i} \n";
    }
}

foreach ($pole3 as $kus){
    echo "{$kus}\n";
}

?>


