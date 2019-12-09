<?php
    ini_set('display_errors', 1);
    include('logout/logout.php');
    require 'life.php';
    require 'header.inc.php';
?>  
    <main>
        <div class="regist">
            <h1>Welcome</h1>
            <form method="post">
                <input type="submit" name="logout" value="log out">
            </form>
        </div>
    </main>
<?php
    require 'footer.inc.php';
?>