<?php
function ternary_test($number){
    $result = $number>30?"greater than 30":
        ($number > 20? "greater than 20":($number>10? "greater than 10":
        "Input a number atleast greater than 10!"));
    echo $number.":".$result."<br>";
}

ternary_test(32);
ternary_test(4);
ternary_test(12);
ternary_test(21);
?>
