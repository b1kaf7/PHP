<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true); // Create uploads folder if it doesn't exist
        }

        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Allow only certain file types
        $allowedTypes = ["jpg", "jpeg", "png", "gif"];
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            } else {
                echo "Error uploading your file.";
            }
        } else {
            echo "Only JPG, JPEG, PNG and GIF files are allowed.";
        }
    } else {
        echo "No file uploaded or an error occurred.";
    }
}
