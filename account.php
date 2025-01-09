<?php
session_start(); // Start de sessie
require 'db.php'; // Maak verbinding met de database
include 'classes/account.php'; // Zorg ervoor dat de accountklasse wordt ingeladen
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['PasswordHash'];

    // Zoek naar de gebruiker in de database
    $sql = "SELECT * FROM Users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Controleer of de gebruiker bestaat en het wachtwoord correct is
    if ($user && password_verify($password, $user['PasswordHash'])) {
        // Sla de gebruikersinformatie op in de sessie
        $_SESSION['user_id'] = $user['userID'];
        $_SESSION['email'] = $user['Email'];
        $_SESSION['fName'] = $user['firstName'];
        $_SESSION['lName'] = $user['lastName'];

        // Redirect naar de accountpagina
        header("Location: account.php");
        exit;
    } else {
        echo "Ongeldige gebruikersnaam of wachtwoord.";
    }
}

include "view/account_view.php";
?>
