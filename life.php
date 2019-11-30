<?php
session_start();

if(isset($_SESSION['email'])){
if((time() - $_SESSION['time_start_login']) > 1800){
    header("location: test.php");
} else {
    $_SESSION['time_start_login'] = time();
}
} else {
header("location: logout/logout.php");
}
?>