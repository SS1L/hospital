<?php
ini_set('display_errors', 1);
//session_start();
include 'includes/registration.php';
include 'includes/connect.php';
require 'header.inc.php';
?>
    <main>
        <div class="regist-form">
            <div class="regist">
                <div class="regist-header">
                    <h1 class="regist-title">Registration</h1>
                </div>

                <form class="information" action="index2.php" method="POST">
                    <div class="danger">
                        <?php
                            if (isset($error)) {
                                echo $error;
                            }
                        ?>
                    </div>
                    <div class="input-group">
                        <div class="name">
                            Name
                        </div>
                        <input class="enter" type="text" name="firstname" placeholder="Name" value="<?php if (isset($firstname)): echo $firstname;endif;?>">
                    </div>

                    <div class="input-group">
                        <div class="name">
                            Surname
                        </div>
                        <label for="surname">
                        </label>
                        <input class="enter" type="text" name="surname" placeholder="Surname" value="<?php if (isset($surname)): echo $surname;endif;?>">
                    </div>

                    <div class="input-group">
                        <div class="name">
                            Email
                        </div>
                        <input class="enter" type="email" name="email" placeholder="E-mail" value="<?php if (isset($email)): echo $email;endif;?>">
                    </div>

                    <div class="input-group">
                            <div class="name">
                                Password
                            </div>
                            <input class="enter" type="password" name="password" placeholder="Password" value="<?php if (isset($password)): echo $password;endif;?>">
                    </div>

                    <div class="input-group">
                        <div class="name">
                            Confirm
                        </div>
                        <input class="enter" type="password" name="confirm" placeholder="Confirm password" value="<?php if (isset($confirm)): echo $confirm;endif;?>">
                    </div>

                    <div class="log-in">
                        <input class="sign-up" type="submit" name="create" value="Sign Up">
                        <!--<a class="enter-login" href="test.php">Login</a> -->
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php
ini_set('display_errors', 1);
require 'footer.inc.php';
?>