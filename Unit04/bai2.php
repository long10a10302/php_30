<?php
    $array = array(1,8,56,7,4);
    $cout = count($array);
    echo "Reverse Array: ";
    for ($i = $cout - 1; $i >= 0; $i--) {
         echo $array[$i] . " ";
    }
?>