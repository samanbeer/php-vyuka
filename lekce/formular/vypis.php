<?php
$c1 = $_GET["prvni_cislo"] ?? 'nic';
$c2 = $_GET["druhe_cislo"] ?? 'nic';
$c3 = $_GET["treti_cislo"] ?? 'nic';

$checkbox1 = $_GET["box_prvni"] ?? 'nic';

$radio_porovnej = $_GET["porovnej"];

if($checkbox1 == 'nic'){
    echo "Nic tam není";
}
else{
    foreach($checkbox1 as $x){
        if ($x == 'C1'){
            echo $c1;
        }
        else if($x == 'C2'){
            echo $c2;
        }
        else if($x == 'C3'){
            echo $c3;
        }
    }
}



?>