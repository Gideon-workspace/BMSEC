<?php

$dsn = "mysql:host=localhost;dbname=u993176877_bmsecdatabase3";
$dbusername = "u993176877_bmsecowners";
$dbpassword = "Bmsecowners3";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
?>
