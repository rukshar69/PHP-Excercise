<?php
$heightsOfBuildings = array();
$file = fopen("test.txt","r");
while ($line = fgets($file)){
    rtrim($line,"\n");
    array_push($heightsOfBuildings, (int)$line);

}
rsort($heightsOfBuildings);
print("Heights of the top three buildings:\n");
echo $heightsOfBuildings[0]."<br>";
echo $heightsOfBuildings[1]."<br>";
echo $heightsOfBuildings[2]."<br>";
?>
