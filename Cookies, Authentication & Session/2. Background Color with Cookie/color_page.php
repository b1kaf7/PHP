<?php
$bgColor = isset($_COOKIE['fav_color']) ? $_COOKIE['fav_color'] : '#ffffff';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Color Page</title>
</head>

<body style="background-color: <?= htmlspecialchars($bgColor) ?>;">
    <h2>Your personalized background color</h2>
    <p><a href="set_color.php">Change color</a></p>
</body>

</html>