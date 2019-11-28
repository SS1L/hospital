<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=useraccounts", "root", "12345678");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
} catch (PDOException $e) {
    echo "Sorry" . $e->getMessage();
}
?>