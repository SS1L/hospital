<?php 
    ini_set('display_errors', 1);
    include('login.php');
?>

<!DOCTYPE html>
<html>
    <head lang="en">
        <title>Test</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="style/style2.css">
    </head>
    <body>
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
        <form method="POST">
            <div class="danger">
                <?php
                    if(isset($error)){
                        echo $error;
                    }
                ?>
            </div>
            <div class="input-group">
                <div class="name">
                    Email
                </div>
                <input class="enter" type="email" name="email" placeholder="E-mail" value="<?php if(isset($email)): echo $email; endif;?>">
            </div>
            <div class="input-group">
                <div class="name">
                    Password
                </div>
                <input class="enter" type="password" name="password" placeholder="Password" value="<?php if(isset($password)): echo $password; endif;?>">
            </div>
            <div class="log-in">
                <input class="sign-up" type="submit" name="login" value="Sign In">
            </div>
        </form>
    </body>
    <footer>
        <h2 class="footer-title">HOSPITAL</h2>
        <nav>
            <ul class="footer-list">
                <li class="footer-item"><a href="#">Registration</a></li>
                <li class="footer-item"><a href="#">Service</a></li>
                <li class="footer-item"><a href="#">Contact Us</a></li>
            </ul>
        </nav>

        <div class="socials">
            <a class="socials-link" href="#">
                <img class="socials-img" src="img/facebook.png" alt="facebook">
            </a>
            <a class="socials-link" href="#">
                <img class="socials-img" src="img/instagram.png" alt="instagram">
            </a>
            <a class="socials-link" href="#">
                <img class="socials-img" src="img/telegram.png" alt="telegram">
            </a>
        </div>
        <div class="bottom-footer">
            @ Made by
            <a class="git-link" href="https://github.com/SS1L" target="_blanck">Vlad Artyukh</a>
        </div>
    </footer>
</html>