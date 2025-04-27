<?php
$valid_username = 'user';
$valid_password = 'secret';

if (
    !isset($_SERVER['PHP_AUTH_USER']) ||
    $_SERVER['PHP_AUTH_USER'] !== $valid_username ||
    $_SERVER['PHP_AUTH_PW'] !== $valid_password
) {

    header('WWW-Authenticate: Basic realm="Protected Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Unauthorized access.";
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Protected Page</title>
</head>

<body>
    <h2>Welcome to the protected page, <?= htmlspecialchars($valid_username) ?>!</h2>
</body>

</html>