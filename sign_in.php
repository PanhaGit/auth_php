<?php
require_once("./User.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User();

    if ($user->register($email, $password)) {
        // Redirect or show success message
        echo "Registration successful";
    } else {
        // Show error message
        echo "Registration failed";
    }
}
