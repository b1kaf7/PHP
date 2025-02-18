
<?php
$var = "Hello, World!";

function printVar()
{
    global $var;
    echo $var;
}

printVar();
?>