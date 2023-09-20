<?php
function even_number($start, $end, $step){
    if($start % 2 !== 0){
        $start++;
    }
    $i = $start;
    while($i <= $end){
        echo $i."\n";
        $i = $i + $step;
    }
}

even_number(1,20,2);

?>