<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menus - Yume Ramen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/cart.js" defer></script>
</head>
<body>
<!-- Header -->
<header class="bg-light">
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

<!-- Main Content -->
<main class="container mt-4">
    <div class="row gy-3">
        <!-- Menu Items -->
        <div class="col-6 d-flex justify-content-center">
            <div class="menu-item" onclick="addToCart('Ramen Bowl', 12.99)">🍜</div>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <div class="menu-item" onclick="addToCart('Sushi Roll', 8.99)">🍣</div>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <div class="menu-item" onclick="addToCart('Miso Soup', 4.99)">🥣</div>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <div class="menu-item" onclick="addToCart('Green Tea', 2.99)">🍵</div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bottom-nav d-flex justify-content-around align-items-center fixed-bottom">
    <a href="index.html">Home</a>
    <a href="menu.html" class="active">Producten</a>
    <a href="menu.html">Menu's</a>
    <a href="orders.html">Bestellingen</a>
    <a href="account.html">Account</a>
</footer>
</body>

</html>
