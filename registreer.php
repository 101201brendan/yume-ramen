<?php
require 'db.php'; // Zorg ervoor dat je de databaseverbinding hebt
include 'classes/Account.php'; // Zorg ervoor dat de accountklasse wordt ingeladen

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verkrijg formulierinvoer
    $email = $_POST['email'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $password = $_POST['password'];

    // Wachtwoord hashen
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Voeg het account toe aan de database
    $sql = "INSERT INTO Users (email, first_name, last_name, password) VALUES (:email, :fName, :lName, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':fName', $fName);
    $stmt->bindParam(':lName', $lName);
    $stmt->bindParam(':password', $hashedPassword);

    if ($stmt->execute()) {
        echo "Account succesvol aangemaakt!";
        header("Location: Account.php"); // Stuur door naar de loginpagina
        exit;
    } else {
        echo "Er is een fout opgetreden bij het aanmaken van het account.";
    }
}

include "view/registreer_view.php";