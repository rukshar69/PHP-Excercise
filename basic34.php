<?php
function test_bit_position($num, $pos1, $pos2){
    $pos1--;
    $pos2--;
    $binary = decbin($num);
    $revBinary = strrev($binary);

    if($revBinary[$pos1] == $revBinary[$pos2]){
        return "true";
    }else {
        return "false";
    }
}

echo test_bit_position(112,5,6)."<br>";
?>
