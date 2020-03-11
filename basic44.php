<?php
function findPairs($nums, $pairSum){
    $num_pairs = "";
    for($i = 0;$i<=count($nums);$i++){
        for($j = $i+1;$j<count($nums);$j++){
            if($nums[$i] + $nums[$j] == (int)$pairSum){
                $num_pairs .= $nums[$i].",".$nums[$j].";";
            }
        }
    }
    return $num_pairs;
}

$nums = array(0,1,2,3,4,5,6);
echo findPairs($nums, 7)."<br>";
echo findPairs($nums, 5)."<br>";
?>
