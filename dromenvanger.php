<?php

$arr = array("");


echo "Hoeveel vrienden zal ik vragen om hun droom?".PHP_EOL;
$aantal = readline();

if (!is_numeric($aantal)){
    exit($aantal." is geen getal!");
}

for($i = 1; $i <= $aantal; $i++){
    echo "Wat is jouw naam?".PHP_EOL;
        $naam = readline("");
    echo "Hoeveel dromen ga je opgeven?".PHP_EOL;
        $dromen = readline("");
if (!is_numeric($dromen)){
    exit($dromen." is geen getal!");
}
for($j = 1; $j <= $dromen; $j++){
    echo "wat is jou droom?".PHP_EOL;
        $dedromen = readline("").PHP_EOL;
        $arra[] = array($naam, $dedromen);
    }
}
foreach($arra as $theend){
    echo $theend[0] . " heeft deze droom: " . $theend[1].PHP_EOL;
}
?>