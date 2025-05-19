<?php
$filename = "students.csv";
if (($handle = fopen($filename, "r")) !== false) {
    echo "<h3>Student Names:</h3>";
    echo "<ul>";

    // Updated fgetcsv with escape parameter
    while (($data = fgetcsv($handle, 1000, ",", '"', "\\")) !== false) {
        $studentName = $data[0];
        echo "<li>" . htmlspecialchars($studentName) . "</li>";
    }

    echo "</ul>";
    fclose($handle);
} else {
    echo "Unable to open file: $filename";
}
