<?php
    $array_num = array(-11,-12,-13,-15);
    $max = $array_num[0];
    foreach($array_num as $value){
        echo $value ." " . " ";
            if($value > $max){
                $max = $value;
            }
    }
    echo " <br> Số nguyên lớn nhất trong mảng là: " .$max;
?>