<?php
//Write a function countCalls() that counts the number of times it has been called. Use the static keyword.
function countCalls()
{
    static $count = 0;
    $count++;
    echo "This function has been called $count times.</br>";
}
countCalls();
countCalls();
countCalls();
