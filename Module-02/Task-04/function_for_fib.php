<?php
function fibonacci($numbers){
    $veryold = 0;
    $old = 1;
    for($i = 0; $i <= $numbers; $i++){
        echo $veryold."\n";
        $new = $veryold + $old;
        $veryold = $old;
        $old = $new;
    }
}
fibonacci(20);
?>