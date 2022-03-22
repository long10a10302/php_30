
<?php
function isPrimeNumber($n)
{
   if($n > 0){
       $dem = 0;
       for ($i = 1; $i <= $n; $i++){
           if ($n % i == 0){
               $dem++;
           }
       }
       if ($dem = 2){
           return true;
       }else{
           return false;
       }
   }
}

echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for ($i = 0; $i < 100; $i++) {
    if (isPrimeNumber($i)) {
        echo ($i . " ");
    }
}