<?php
    ini_set('display_errors', 1);
    include('logout/logout.php');
    require 'life.php';
    require 'header.inc.php';
?>
        <form method="post">
            <input type="submit" name="logout" value="log out">
        </form>

<?php
    require 'footer.inc.php';
?>