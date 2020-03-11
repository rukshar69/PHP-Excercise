<?php
$a = 5;
$b = 5;
$c = 4;

$a *= $a;
$b *= $b;
$c *= $c;
if($a + $b == $c || $b+$c == $a || $c+$a == $b){
    echo "YES"."<br>";
}
else {
    echo "NO"."<br>";
}
?>
