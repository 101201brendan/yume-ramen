<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Yume Ramen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/cart.js" defer></script>
</head>
<body>
<!-- Header -->
<header class="bg-light position-relative">
    <a href="index.html">
        <img class="logo-header" src="images/logo/logo.png" alt="logo yume-ramen">
    </a>
    <h5 class="m-0">Yume Ramen</h5>
    <div class="cart-icon" onclick="toggleCart()">
        <i class="bi bi-cart3 fs-4"></i>
        <span class="cart-badge" id="cart-badge">0</span>
    </div>
    <!-- dropdown voor de cart -->
    <div class="cart-dropdown" id="cart-dropdown">
        <div id="cart-items">
            <p class="text-center text-muted">Your cart is empty</p>
        </div>
        <div class="text-center p-2">
            <button class="btn btn-primary btn-sm" onclick="checkout()">Checkout</button>
        </div>
    </div>
</header>

<main class="container text-center mt-4">

    <?php

    if (!isset($_SESSION['user_id'])) { 

    // Controleer of de gebruiker is ingelogd
    if (isset($_SESSION['user_id'])) {
        // Als de gebruiker is ingelogd, toon de accountinformatie
        ?>
        <h2>Welkom, <?= $_SESSION["fName"] ?> <?= $_SESSION["lName"] ?></h2>
        <p>Email: <?= $_SESSION["email"] ?></p>
        <p>Adres: <?= $_SESSION['postcode'] ?> <?= $_SESSION['street'] ?> <?= $_SESSION['houseNum'] ?></p>


        <button class="btn btn-outline-secondary w-100 my-2">Bewerk informatie</button>

        <!-- Log uit formulier -->
        <form action="logout.php" method="POST">
            <button class="btn btn-outline-dark w-100 my-2" type="submit">Log uit</button>
        </form>

        <?php
    } else {
        // Als de gebruiker niet ingelogd is, toon het inlogformulier
        ?>

        <h2>Login</h2>
        <form action="account.php" method="POST">
            <label for="email">E-mailadres:</label>
            <input type="text" id="email" name="email" required>
            <br><br>
            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <button class="btn btn-primary w-100 my-2" type="submit">Inloggen</button>
        </form>

        <button class="btn btn-outline-dark w-100 my-2" onclick="window.location.href='registreer.php'" type="submit">Registreer</button>

        <?php
    }
    ?>

</main>

<!-- Footer -->
<footer class="bottom-nav d-flex justify-content-around align-items-center fixed-bottom">
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="orders.php">Orders</a>
    <a href="contact.php" >Contact</a>
    <a href="#" class="active">Account</a>
</footer>
</body>
</html>
