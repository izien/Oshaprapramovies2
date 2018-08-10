<?php

// used to connect to the database 
$host = "localhost";
$db_name = "booust";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

//show error 
catch(PDOException $exception){
echo "connection error: " . $exception->getmessage();

}
?> 