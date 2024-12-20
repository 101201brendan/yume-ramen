<?php
$servername = "localhost";
$username = "dbu101201";
$password = "Hummer.anne.12";
$database = "BEROEPS2_101201";

try {
    // Create a new PDO instance for the database connection
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // You can optionally check if the connection was successful
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit; // Exit if the connection fails
}
?>
