<?php
    ini_set('display_errors', 1);
    include('includes/connect.php');


    if(isset($_POST['login'])){
        require 'database/db.php';
        $error='';
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        if(empty($email) || empty($password)){
            $error="<div>Please fill out the form</div>";
        }
        else{
            $sql = $db->prepare("SELECT FROM email, password FROM users WHERE email=? and password=?");
            $sql->execute(array($email, $password));
            $error = "<div>Welcome</div>";
        }
    }
?>