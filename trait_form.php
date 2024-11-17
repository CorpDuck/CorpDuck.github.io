<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm-password']);


  
    echo "<h1>You've successfully signed up!</h1>";
    echo "<p>Welcome, $name!</p>";
} else {
   
    header("Location: index.html");
    exit();
}
?>