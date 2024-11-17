<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    $password = htmlspecialchars($_GET['password']);
    $confirm_password = htmlspecialchars($_GET['confirm-password']);


  
    echo "<h1>You've successfully signed up!</h1>";
    echo "<p>Welcome, $name!</p>";
} else {
   
    header("Location: index.html");
    exit();
}
?>