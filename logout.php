<?php
ini_set('display_errors', 1);

echo "Welcome";
if(isset($_POST['logout'])){
    session_start();
    session_destroy();
    header('location: test.php');
    
}
//session_destroy();
//header('test.php');
?>