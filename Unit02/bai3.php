
<?php
function isPrimeNumber($n)
{
    if ($n < 2) {
        return false;
    }
    $sprtRoot = sqrt($n);
    for ($i = 2; $i <= $sprtRoot ; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for ($i = 0; $i < 100; $i++) {
    if (isPrimeNumber($i)) {
        echo ($i . " ");
    }
}