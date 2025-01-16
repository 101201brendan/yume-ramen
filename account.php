<?php
session_start();
require 'db.php';
include 'classes/Account.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];  // Gebruik normaal wachtwoord, geen hash

    // Validatie
    if (empty($email) || empty($password)) {
        echo "Vul zowel een e-mailadres als een wachtwoord in.";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ongeldig e-mailadres.";
        exit;
    }

    try {
        // Zoek de gebruiker op basis van het e-mailadres
        $sql = "SELECT userID, firstName, lastName, Email, PasswordHash, postcode, streetName, HouseNum FROM Users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

// Controleer wachtwoord
        if ($user && $password === $user['PasswordHash']) {
            // Maak een Account object aan
            $account = new Account(
                $user['userID'],
                $user['Email'],
                $user['firstName'],
                $user['lastName'],
                $user['PasswordHash'], // Of gebruik $password als je geen hashing gebruikt
                $user['postcode'],
                $user['streetName'],
                $user['HouseNum']
            );

            // Sessiegegevens opslaan
            session_regenerate_id(true);
            $_SESSION['user_id'] = $account->userId;
            $_SESSION['email'] = $account->email;
            $_SESSION['fName'] = $account->fName;
            $_SESSION['lName'] = $account->lName;
            $_SESSION['postcode'] = $account->postcode;
            $_SESSION['street'] = $account->street;
            $_SESSION['houseNum'] = $account->houseNum;

            // Redirect naar account.php
            header("Location: account.php");
            exit;
        } else {
            echo "Ongeldige gebruikersnaam of wachtwoord.";
        }

    } catch (PDOException $e) {
        error_log($e->getMessage());
        echo "Er is een fout opgetreden. Probeer het later opnieuw.";
        exit;
    }
}

include "view/account_view.php";
