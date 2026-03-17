<?php

$pole = ['první',  'druhé', 'treti', 'ctvrte', 'pate', 'seste'];
echo "V poli je " . count($pole) . " prvků\n\n";

echo "\n=== for ===\n";
for ($i = 0; $i < count($pole); $i++){
    echo $i + 1 . ". prvek:";
    echo " " . $pole[$i] . "\n";
}
echo "\n\n\n===Foreach===\n";

foreach($pole as $obsah_prvku){
    echo $obsah_prvku . "\n";
}

?>