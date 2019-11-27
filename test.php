<?php 
    ini_set('display_errors', 1);
    include('login.php');
?>

<!DOCTYPE html>
<html>
    <head lang="en">
        <title>Test</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST">
            <div class="danger">
                <?php
                    if(isset($error)){
                        echo $error;
                    }
                ?>
            </div>
            <div>
                <div>
                    Email
                </div>
                <input type="email" name="password" placeholder="E-mail" value="<?php if(isset($email)): echo $email; endif;?>">
            </div>
            <div>
                <div>
                    Password
                </div>
                <input type="password" name="password" placeholder="Password" value="<?php if(isset($password)): echo $password; endif;?>">
            </div>
            <div>
                <input type="submit" name="login" value="Sign In">
            </div>
        </form>
    </body>
</html>