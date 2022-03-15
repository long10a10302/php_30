<?php
    for ($i=1;$i<=100;$i++){
        if($i % 3 == 0){
            echo "<br>Fizz"  ."-" .$i;
        }else if($i % 5 == 0){
            echo "<br>Buzz"  ."-" .$i;
        }else if($i % 3 == 0 && $i % 5 == 0){
            echo "<br> &npsp sFizzBuzz"  ."-" .$i;
        }else{
            echo " <br>Không thỏa mãn đề bài" ."-" .$i;
        }
    }
?>