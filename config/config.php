<?php
session_start();

<<<<<<< HEAD
require_once __DIR__ . '/../includes/activity-logger.php';


define('BASE_URL', 'http://localhost/IT34A');
//http://localhost/IT34A/includes/test-logger.php

define('DB_HOST', 'localhost');
define('DB_NAME', 'it34a');
define('DB_USER', 'root');
define('DB_PASS', '');

$user_id = "root" ?? null;
$user_email = "root" ?? null;

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

        ]
    );
    $success = logActivity(
        $pdo,
        $user_id,
        $user_email,
        'db_connect',
        'success'
            );

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
=======
require_once(__DIR__ . '/../includes/activity-logger.php');

// define('','');
define('BASE_URL','http://localhost/it34a'); // http://localhost/it34a_lab_db/includes/test-logger.php

define('DB_HOST','localhost');
define('DB_NAME','it34a_lab_db');
define('DB_USER','root');
define('DB_PASS','');



try{
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
   
}catch(PDOException $e){
    die("Connection failed: " . $e->getMessage());
    
>>>>>>> e6fa97461427607e78f486ad703109a0424e453b
}
?>