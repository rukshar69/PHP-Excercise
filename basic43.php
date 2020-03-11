<?php
function multiplyTwoList($x,$y){
    $a = explode(' ', trim($x));
    #print_r($a);
    $b = explode(' ', trim($y));
    foreach ($a as $key=>$value){
        $output[$key] = $a[$key] * $b[$key];
    }
    return implode(' ',$output);
}
echo multiplyTwoList(("10 12 3"), ("1 3 3"))."<br>";
?>
