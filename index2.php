<?php
    ini_set('display_errors', 1);
    //session_start();
    include('registration.php');
    //include('test.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hospital</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div>

    <header>
        <div class="container">
            <a href="index.html">
                <img class="header-img" src="img/hospital-logo.png" alt="doctor-and-nurse">
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn">
            <label class="menu-icon" for="menu-btn">
                <span></span>
            </label>
            <ul class="menu-box">
                <li class="header-menu-iteam"><a href="#">Страхування</a></li>
                <li class="header-menu-iteam"><a href="#">Медична реформа</a></li>
                <li class="header-menu-iteam"><a href="#">Контакти</a></li>
            </ul>
        </div>
    </header>

    <div class="regist-form">
        <div class="regist">
            <div class="regist-header">
                <h1 class="regist-title">Registration</h1>
            </div>
            
            <form class="information" action="index2.php" method="post">
            <div class="danger">
                <?php 
                        if(isset($error)){
                            echo $error;
                        }
                    ?>
                </div>
                <div class="input-group">
                    <div class="name">
                        Name
                    </div>
                        <input class="enter" type="text" name="firstname" placeholder="Name" value="<?php if(isset($firstname)): echo $firstname; endif;?>">
                    
                </div>

                <div class="input-group">
                    <div class="name">
                        Surname
                    </div>
                    <label for="surname">
                    </label>
                    <input class="enter" type="text" name="surname" placeholder="Surname" value="<?php if(isset($surname)): echo $surname; endif;?>">
                </div>




                
                <!--<lable for="sex">
            <b>Male or female</b>
        </lable>
        <input type="radio" name="sex">
        <input type="radio" name="sex">
        <input type="radio" name="sex">
            -->
                <div class="input-group">
                    <div class="name">
                        Email
                    </div>
                    <input class="enter" type="email" name="email" placeholder="E-mail" value="<?php if(isset($email)): echo $email; endif;?>">
                </div>
                <!--
        <label for="birthday">
            <b>Birthday</b>
        </label>
        <input type="date" name="birthday" required>-->

                <div class="input-group">
                        <div class="name">
                            Password
                        </div>
                        <input class="enter" type="password" name="password" placeholder="Password" value="<?php if(isset($password)): echo $password; endif;?>">
                </div>

                <div class="input-group">
                    <div class="name">
                        Confirm
                    </div>
                    <input class="enter" type="password" name="confirm" placeholder="Confirm password" value="<?php if(isset($confirm)): echo $confirm; endif;?>">
                </div>

                

                <!--<div class="input-group">
                        <div class="name">
                            Confirm password
                        </div>
                        <input class="enter" type="password" name="password" placeholder="Password" required>
                    </div>
                -->
                <div class="log-in">
                    <input class="sign-up" type="submit" name="create" value="Sign Up">
                </div>
            </form>
        </div>
    </div>
</body>

</html>