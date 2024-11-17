<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $confirm_password = $_POST['confirm-password'] ?? null;

    if ($password !== $confirm_password) {
        throw new Exception('Passwords must be the same.');
    }

    echo "<h1>You've successfully signed up!</h1>";
    echo "<p>Welcome, $name!</p>";
} else {
    echo '<h1>Fields are not filled. Please check your form input again.</h1>';
}
