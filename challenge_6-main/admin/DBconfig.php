<?php
DEFINE("USER", "root");
DEFINE("PASSWORD", "");
try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_showroom", USER, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOexceprion $e) {
    echo $e->getMessage();
    echo "Kon geen verbinding maken.";
}
