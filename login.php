<?php
ini_set('display_errors', 1);
session_start();
include 'includes/connect.php';
require 'database/db.php';

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $error = '';
    if (empty($email) || empty($password)) {
        $error = "<div>Please fill out the form</div>";
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
            $query = $db->prepare($sql);
            $query->execute(array($email, $password));
            if ($query->rowCount() >= 1) {
                $_SESSION['email'] = $_POST['email'];
                header("location: welcome.php");
            } else {
                $error = "<div>Wrong email or password</div>";
            }
        } else {
            $error = "<div>Invalid email</div>";
        }
    }
}
?>