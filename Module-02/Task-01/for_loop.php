<?php
function even_number($start, $end, $step){
    if($start % 2 !== 0){
        $start++;
    }
    for($i = $start; $i<= $end; $i =$i+$start){
        echo $i."\n";
    }
};
even_number(1,20,2);
?>
