<?php
function checkEvenOdd($num)
{
    if ($num % 2 == 0) {
        return "$num is even.";
    } else {
        return "$num is odd.";
    }
}

echo checkEvenOdd(4) . "<br>";
echo checkEvenOdd(7) . "<br>";
