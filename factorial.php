<?php
    $a = 5;
    $sum = 1;
    for ($i=1;$i<$a;$i++){
        $sum += $sum * $i;
    }
    echo "Factorial:" .$sum;
?>