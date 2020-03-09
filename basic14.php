<?php
$all_lines = file('basic02.php');
foreach ($all_lines as $line_num => $line){
    echo "Line No.--{$line_num}: ".htmlspecialchars($line)."<br>";
}
?>
