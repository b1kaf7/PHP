<?php
function divide($numerator, $denominator)
{
    if ($denominator == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
