<?php
function armstrongCheck($n){
    $sum =0;
    $numLen = strlen($n);
    $n = (string)$n;
    for($i = 0; $i < $numLen; $i++){
        $sum = $sum + pow((string)$n{$i},$numLen);
    }

    if((string)$sum==(string)$n){
        return "True";
    }
    else{
        return "False";
    }
}

echo "is 153 armstrong number? ".armstrongCheck(153)."<br>";
echo "is 21 armstrong number? ".armstrongCheck(21)."<br>";
echo "is 4587 armstrong number? ".armstrongCheck(4587)."<br>";
?>
