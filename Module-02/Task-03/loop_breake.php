<?php

    $sum1 = 0;
    $sum2 = 1;

    for($i  = 0; $i <= 10; $i++){
        if($sum1 > 100){
            break;
        };
        echo $sum1."\n";
        $result = $sum1 + $sum2;
        $sum1 = $sum2; 
        $sum2 = $result; 
    }

?>

