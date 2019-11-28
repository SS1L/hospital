<?php
session_start();
session_destroy();
header('test.php');
?>