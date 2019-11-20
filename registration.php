<?php
    ini_set('display_errors', 1);
    //include('test.php');
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "12345678";
    $db_database = "useraccounts";
   // $errors = array();

    if(isset($_POST['create'])){
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];
        

       // if(empty($firstname)){
        //    array_push($errors, "sdadsa");
        //}

        $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $pattern = "/^[0-9]{3}-[0-9]{4}-[0-9]{3}$/";

        if($phonenumber != 10) {
            echo "<div><h1>Sorry need 10</h1></div>";
            exit();
        }
        //if(preg_match($pattern, $phonenumber)){
        //    echo "Nice";
       // }
       // else {
       //     echo "WTF";
       //     exit();
        //}
        
        $email_check = $conn->prepare("SELECT email FROM users WHERE email=?");
        if($email_check->rowCount()==1){
            echo "mice";
        }
        else {
            echo "sadlasd";
            exit();
        }
        

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