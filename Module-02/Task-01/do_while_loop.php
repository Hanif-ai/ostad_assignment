<?php

function even_number($start, $end, $step){
    if($start % 2 !== 0){
        $start++;
    }

    $i = $start;
    do{echo $i."\n"; $i = $i + $step;}
    while($i <= $end);
}

even_number(1,20,2)
?>