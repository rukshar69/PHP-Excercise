<?php
function digitSum($number){
    $sum = 0;
    for($i= 0;$i<strlen($number);$i++){
        $sum += $number[$i];
    }
    return $sum;
}
echo digitSum("12345")."<br>";
echo digitSum("9999")."<br>";
?>
