<?php
    ini_set('display_errors', 1);
    include('test.php');


    if(isset($_POST['create'])){
        require 'db.php';
        $error ='';
        $firstname = trim($_POST['firstname']);
        $surname = trim($_POST['surname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm = trim($_POST['confirm']);


        if(empty($firstname)|| empty($surname)|| empty($email) || empty($password)){
            $error= "<div class='danger'>Please fill out the form!</div>";
        }
        else {
            $pattern = "/^[a-zA-Z]+$/";

            if(preg_match($pattern, $firstname)){
                if(preg_match($pattern, $surname)){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if(mb_strlen($password) > 8 || mb_strlen($password) < 50 ){
                            if($password == $confirm){
                                $email_check = $db->prepare("SELECT email FROM users WHERE email=?");
                                $email_check->execute([$email]);
                                if ($email_check->rowCount() == 1){
                                    $error= "<div class='danger'>Sorry,but someone registration using this email</div>";
                                }
                                else {
                                    $sql = $db->prepare("INSERT INTO users (firstname, surname, email, comfirm, password) VALUES(?,?,?,?,?)");
                                    //$error = "<div class='danger'>Create account</div>";
                                    //$conn->exec($sql); 
                                    echo "<script>alert('Account successfuly edded')</script>"; 
                                }
                            }
                            else {
                                $error = "<div class='danger'>Passwords do not match</div>";
                            }

                        }
                        else {
                            $error = "<div class='danger'>Easy password</div>";
                        }

                    }
                    else{
                        $error = "<div class='danger'>Not valid email</div>";
                    }
                }
                else {
                    $error = "<div class='danger'>Surname muat be character</div>";
                }
            }
            else{
                $error = "<div class='danger'>First name must be character!</div>";
            }
        }

            //$password = md5($password."adsjl2983sajkwu278");}
            

        

        //$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$sql = "INSERT INTO users (firstname, surname, email, phonenumber, password) VALUES('$firstname', '$surname', '$email', '$phonenumber', '$password')";
        //$conn->exec($sql); 
        //echo "<script>alert('Account successfuly edded')</script>";    
    }
?>