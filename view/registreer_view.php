<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Yume Ramen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="register-body">

<header class="bg-light position-relative">
    <a href="/index.html">
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

<!--registreer account-->
<h2>Registreer een nieuw account</h2>
<form class="register" action="register.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <label for="fName">Voornaam:</label>
    <input type="text" name="fName" required>
    <br>
    <label for="lName">Achternaam:</label>
    <input type="text" name="lName" required>
    <br>
    <label for="password">Wachtwoord:</label>
    <input type="password" name="password" required>
    <br>
    <label for="confirmPassword">Herhaal wachtwoord:</label>
    <input type="password" name="confirmPassword" required>
    <br>
    <button type="submit">Registreer</button>
</form>

<!-- Footer -->
<footer class="bottom-nav d-flex justify-content-around align-items-center fixed-bottom">
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="orders.php">Orders</a>
    <a href="#" class="active">Account</a>
</footer>
</body>
</html>