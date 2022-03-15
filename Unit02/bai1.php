<?php
    for ($i=1;$i<=100;$i++){
        if($i % 3 == 0){
            echo "<br>Fizz" ;
            echo ( " ".$i );
        }else if($i % 5 == 0){
            echo "<br>Buzz" ;
              echo ( " ".$i );
        }else if($i % 3 == 0 && $i % 5 == 0){
            echo "<br> &npsp sFizzBuzz" ;
              echo ( " ".$i );
        }else{
            echo " <br>Không thỏa mãn đề bài"  ;
              echo ( " ".$i );
        }
    }
?>