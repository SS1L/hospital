<?php
ini_set('display_errors', 1);


if(isset($_POST['logout'])){
    session_start();
    session_destroy();
    header('location: test.php');
}   
?>