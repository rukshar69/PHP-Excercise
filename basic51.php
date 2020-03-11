<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>
<form action="basic51.php" method="post">
    <input type="number" name="number">
    <input type="submit"><br>
</form>
<?php
$n = $_POST["number"];
echo  $n;
$count = 0;
for($i = 0;$i<10;$i++){
    for($j = 0; $j<10;$j++){
        for ($k = 0;$k<10;$k++){
            for ($l = 0;$l<10;$l++){
                if ($i+$j+$k+$l==$n){
                    $count++;
                }
            }
        }
    }
}
echo "\nNumber of combinations of a,b,c and d: ";
echo $count."<br>";
?>
</body>

</html>
