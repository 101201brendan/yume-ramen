<?php
$servername = "localhost";
$username = "dbu101201";
$password = "Hummer.anne.12";
$database = "BEROEPS2_101201";

// Maak verbinding
$conn = new mysqli($servername, $username, $password, $database);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
echo "Verbonden met de database!";
