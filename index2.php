<?php
    ini_set('display_errors', 1);
    include('registration.php') 
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

</div>
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
            <form class="information" action="registration.php" method="post">
                <div class="input-group">
                    <div class="name">
                        Name
                    </div>
                        <input class="enter" type="text" name="firstname" placeholder="Name" required>
                    
                </div>

                <div class="input-group">
                    <div class="name">
                        Surname
                    </div>
                    <label for="surname">
                    </label>
                    <input class="enter" type="text" name="surname" placeholder="Surname" required>
                </div>




                <div class="input-group">
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
                    <input class="enter" type="email" name="email" placeholder="E-mail" required>
                </div>
                <!--
        <label for="birthday">
            <b>Birthday</b>
        </label>
        <input type="date" name="birthday" required>-->
                <div class="input-group">
                    <div class="name">
                        Phone
                    </div>
                    <input class="enter" type="phonenumber" name="phonenumber" placeholder="Phone number"
                        pattern="[0-9\s]+" required>
                </div>

                <div class="input-group">
                    <div class="name">
                        Password
                    </div>
                    <input class="enter" type="password" name="password" placeholder="Password" required>
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