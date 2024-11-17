<?php
function signUp(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $confirm_password = $_POST['confirm-password'] ?? null;
        


    
        echo "<h1>You've successfully signed up!</h1>";
        echo "<p>Welcome, $name!</p>";
    } else {
   
        header("Location: index.html");
        exit();
    }
}
if(isset($_POST['submit'])) {
   
    signUp();

}
