<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    echo "Error: All fields are required!";
} else {
    echo "Welcome, $username!";
}
