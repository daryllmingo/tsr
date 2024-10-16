
<?php

// Database credentials
$host = 'localhost';    // or your database host
$db_name = 'tourist_spot';  
$username = 'root';     
$password = '';      

try {
    
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   
    echo "Connection failed: " . $e->getMessage();
}

?>
