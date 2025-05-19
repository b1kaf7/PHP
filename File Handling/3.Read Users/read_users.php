<?php
$jsonData = file_get_contents("users.json");

if ($jsonData === false) {
    die("Error reading JSON file.");
}

$users = json_decode($jsonData, true); // true = return as array

if (is_array($users)) {
    echo "<h2>User Information:</h2>";
    echo "<ul>";
    foreach ($users as $user) {
        echo "<li>Name: " . htmlspecialchars($user['name']) . " | Email: " . htmlspecialchars($user['email']) . "</li>";
    }
    echo "</ul>";
} else {
    echo "Invalid JSON format.";
}
