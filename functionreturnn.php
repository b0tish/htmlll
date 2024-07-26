<?php
    function greater($a,$b){
        if ($a>$b){
            return $a;
        }else{
            return $b;
        }
    }

    echo "Larger: " .greater(5,6);
?>