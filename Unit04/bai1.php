<?php
    $array_num = array(1,8,56,4,7);
    $max = 0;
    foreach($array_num as $value){
        echo $value ." " . " ";
        if($max === null){
            $max = $value;
            echo "Số nguyên lớn nhất trong mảng là: " .$max;
        }else{
            if($value > $max){
                $max = $value;
            }
        }
    }
    echo " <br> Số nguyên lớn nhất trong mảng là: " .$max;
?>