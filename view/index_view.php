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
<header class=" bg-light">
    <a href="#">
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

<!-- Content -->
<main class="container mt-4">

    <h2 class="margin-auto">Welcome to Yume Ramen</h2>
    <marquee>Explore our delicious ramen and sushi!</marquee>

    <!-- Example Products -->
    <div class="row p-2">
        <div class="col-md-4 mb-3 card ">
            <div class="menu-container">
                <img src="images/classic-ramen.jpg" alt="classic ramen">
                <div class="text-center text-container">
                    <h5 class="card-title">Classic Ramen</h5>
                    <p class="card-text">$12.99</p>
                </div>
            </div>
            <button class="btn btn-success" onclick="addToCart('Classic Ramen', 12.99)">Add to Cart</button>
        </div>

        <div class="col-md-4 mb-3 card ">
            <div class="menu-container">
                <img src="images/spicy-miso-ramen.jpg" alt="spicy miso ramen">
                <div class="text-center text-container">
                    <h5 class="card-title">Spicy miso Ramen</h5>
                    <p class="card-text">$13.99</p>
                </div>
            </div>
            <button class="btn btn-success" onclick="addToCart('Spicy Miso Ramen', 13.99)">Add to Cart</button>
        </div>

        <div class="col-md-4 mb-3 card ">
            <div class="menu-container">
                <img src="images/spicy-miso-ramen.jpg" alt="spicy miso ramen">
                <div class="text-center text-container">
                    <h5 class="card-title">Spicy miso Ramen</h5>
                    <p class="card-text">$13.99</p>
                </div>
            </div>
            <button class="btn btn-success" onclick="addToCart('Spicy Miso Ramen', 13.99)">Add to Cart</button>
        </div>

    </div>
</main>

<!-- Footer -->
<footer class="bottom-nav d-flex justify-content-around align-items-center fixed-bottom">
    <a href="#" class="active">Home</a>
    <a href="menu.html">producten</a>
    <a href="menu.html">Menu</a>
    <a href="orders.html">Orders</a>
    <a href="account.html">Account</a>
</footer>
</body>
</html>
