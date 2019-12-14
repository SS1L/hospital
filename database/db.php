<?php
    use Symfony\Component\Dotenv\Dotenv;
    ini_set('display_errors', 1);
    require_once 'vendor/autoload.php';

    $dotenv = new Dotenv();
    $dotenv->loadEnv(__DIR__.'/.env');  
    $db_server = $_ENV['DB_HOST'];
    $db_username = $_ENV['DB_USER'];
    $db_password = $_ENV['DB_PASSWORD'];
    $db_database = $_ENV['DB_NAME'];
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>