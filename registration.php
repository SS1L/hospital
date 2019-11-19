<?php
    ini_set('display_errors', 1);
    $error = array();
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "12345678";
    $db_database = "useraccounts";

    if(isset($_POST['create'])){
        
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];

        $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "nice";
        }
        else {
            echo "error";
            exit();
        }

        if(mb_strlen($password) < 8 || mb_strlen($password) > 50){
            echo "invalid password length ( 8 to 50)";
            exit();
        }
        $password = md5($password."adsjl2983sajkwu278");

        $sql = "INSERT INTO users (firstname, surname, email, phonenumber, password) VALUES('$firstname', '$surname', '$email', '$phonenumber', '$password')";
        $conn->exec($sql); 
        echo "<script>alert('Account successfuly edded')</script>";
        
        
    }
?>