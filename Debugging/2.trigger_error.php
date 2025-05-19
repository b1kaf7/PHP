<?php
function customErrorHandler($errno, $errstr)
{
    echo "<strong>Error:</strong> [$errno] $errstr<br>";
}

// Set custom error handler
set_error_handler("customErrorHandler");

function checkNumber($number)
{
    if ($number < 0) {
        trigger_error("Negative numbers are not allowed.", E_USER_WARNING);
    } else {
        echo "The number is $number.";
    }
}

checkNumber(-5);
