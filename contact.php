<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Yume Ramen</title>
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
    <!-- Dropdown for the cart -->
    <div class="cart-dropdown" id="cart-dropdown">
        <div id="cart-items">
            <p class="text-center text-muted">Your cart is empty</p>
        </div>
        <div class="text-center p-2">
            <button class="btn btn-primary btn-sm" onclick="checkout()">Checkout</button>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="container text-center mt-4">
    <h2>Contact Us</h2>
    <section class="contact-card">
        <img src="images/team/Brendan.jpeg" alt="Brendan Drenth" class="profile-pic">
        <h3>Brendan Drenth</h3>
        <p>Software Developer</p>
        <p>Email: <a href="mailto:101201@glr.nl">101201@glr.nl</a></p>
        <p>Phone: <a href="tel:+31636363061">+31 6 3636 3061</a></p>
    </section>
    <section class="contact-card">
        <img src="images/team/Carsten.jpeg" alt="Carsten de Ru" class="profile-pic">
        <h3>Carsten de Ru</h3>
        <p>Software Developer</p>
        <p>Email: <a href="mailto:100208@glr.nl">100208@glr.nl</a></p>
        <p>Phone: <a href="tel:+31610105805">+31 6 1010 5805</a></p>
    </section>
</main>

<!-- Footer -->
<footer class="bottom-nav d-flex justify-content-around align-items-center fixed-bottom">
    <a href="index.php">Home</a>
    <a href="menu.php">producten</a>
    <a href="orders.php">Orders</a>
    <a href="#" class="active">Contact</a>
    <a href="account.php">Account</a>
</footer>
</body>
</html>
