<?php
function s2_in_s1($s1, $s2){
    $p_len = strlen($s2);
    $w_len = strlen($s1);

    if (substr($s1, $w_len-$p_len, $p_len)==$s2){
        return "true";
    }
    else {
        return "false";
    }
}

echo  s2_in_s1("python", "on")."<br>";
echo s2_in_s1("Javascript","php")."<br>";
?>
