<?php

function countCalls()
{
    static $count = 0;
    $count++;
    echo "This function has been called $count times.</br>";
}

countCalls();
countCalls();
countCalls();
