<?php
            if(isset($_POST['create'])){
                $firstname = $_POST['name'];
                $surname = $_POST['surname'];
                $email = $_POST['email'];
                $phonenumber = $_POST['phonenumber'];
                $password = $_POST['password'];

                echo $firstname .' '. $surname .' '.  $email .' '.  $phonenumber .' '.  $password; 
            }
?>