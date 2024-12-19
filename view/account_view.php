<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Yume Ramen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/cart.js" defer></script>
</head>
<body>
<!-- Header -->
<header class=" bg-light position-relative">
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
    <div class="profile-pic"></div>
    <h5>Name</h5>
    <p>Email: example@example.com</p>
    <p>Address: Example Street</p>

    <button class="btn btn-outline-secondary w-100 my-2">Edit Information</button>
    <button class="btn btn-outline-dark w-100 my-2">Log Out</button>
    <button class="btn btn-danger w-100 my-2">Delete Account</button>
</main>

<footer class="bottom-nav d-flex justify-content-around align-items-center fixed-bottom">
    <a href="index.html">Home</a>
    <a href="menu.html">Producten</a>
    <a href="menu.html">Menu's</a>
    <a href="orders.html">Bestellingen</a>
    <a href="#" class="active">Account</a>
</footer>
</body>

</html>
