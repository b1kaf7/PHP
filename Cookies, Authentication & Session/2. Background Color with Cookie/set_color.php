<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = $_POST['color'];
    setcookie('fav_color', $color, time() + (86400 * 30), "/"); // 30 days
    header("Location: color_page.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Set Color</title>
</head>

<body>
    <form method="post">
        Select your favorite background color:
        <input type="color" name="color" required>
        <input type="submit" value="Set Color">
    </form>
</body>

</html>