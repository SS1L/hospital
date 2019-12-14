<?php 
    ini_set('display_errors', 1);
    include('login/login.php');
    require 'header.inc.php';
?>

    <main>
        <div class="regist">
            <div class="regist-header">
                    <h1 class="regist-title">Log in</h1>
            </div>
            <form class="information" method="POST">
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
                <button class="bottom-registr">
                    <a class="" href="index2.php">Register NOW</a>
                </button>

            </form>
        </div>
    </main>

<?php
    require 'footer.inc.php';
?>