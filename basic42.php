<?php
function nonRepeating($word){
    for($i = 0;$i <= strlen($word);$i++){
        if(substr_count($word, substr($word,$i,1))==1){
            return substr($word, $i, 1);
        }
    }
}

echo nonRepeating("Green")."<br>";
echo nonRepeating("abcdea")."<br>";
?>
