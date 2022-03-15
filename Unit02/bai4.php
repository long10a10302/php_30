<?php
    $sum = 0.0;
    for($i = 1 ; $i <= 100 ; $i ++ ){
        $sum = $sum+1/(2*$i);
        echo "Tổng của dãy số bằng ".$sum;
    }
?>