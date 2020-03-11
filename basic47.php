<?php
function numDigits($number){
    return (int)(log10($number)+1);
}
$file = fopen("basic47.txt","r");
while ($line = fgets($file)){
    $pairOfNumbers = explode(' ',$line);
    $a = $pairOfNumbers[0];
    $b = $pairOfNumbers[1];
    $d = numDigits($a+$b);
    echo("Digit number of sum of two given integers: ");
    echo $d . "<br>";
}
?>
