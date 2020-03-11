<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>
<form action="basic54.php" method="post">
    <input type="number" name="number1">
    <input type="number" name="number2">
    <input type="submit"><br>
</form>
<?php
$n1 = $_POST["number1"];
$n2 = $_POST["number2"];

if(max(strlen($n1), strlen($n2))){
    echo "overflow"."<br>";
}
$arr = array_fill(0,81,0);
for($j = 80; $j>0;$j--){
    $n = $arr[$j] + $a[$j] + $b[$j];
    if($n >= 10){
        $arr[$j] = substr($n,1);
        $arr[$j-1] +=1;
    }else{
        $arr[$j] = $n;
    }
}
$finalResult = preg_replace('/^0+(\d+)$/','$1',implode('',$arr));
if(strlen($finalResult)>80){
    echo "overflow"."<br>";
}
else{
    echo $finalResult, PHP_EOL;
}
?>
</body>

</html>
