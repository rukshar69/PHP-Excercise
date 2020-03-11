<?php
function remove_duplicates_list($array){
    $unique = array_values(array_unique($array));
    return $unique;
}

$nums = array(1,1,2,2,3,4,5,5);
print_r(remove_duplicates_list($nums));
?>
