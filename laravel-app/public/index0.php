<?php
$dbname_p = 'hcrec';
$db_host_p = '10.190.74.139';
$db_user_p = 'postgres';
$db_password_p = 'postgres';

try {
    $pdo = new PDO("pgsql:host=$db_host_p;dbname=$dbname_p", $db_user_p, $db_password_p);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

date_default_timezone_set('Asia/Kolkata'); 
?>