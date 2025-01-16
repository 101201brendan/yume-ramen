<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellingen - Yume Ramen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/cart.js" defer></script>
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

<main class="container mt-4">
    <div class="row gy-3">
        <!-- Order Card -->
        <div class="col-12">
            <div class="card d-flex flex-row align-items-center">
                <div class="order-item me-3"></div>
                <div>
                    <p class="m-0">Order Number: #xx</p>
                    <p class="m-0">Address: xx</p>
                    <p class="m-0">Arrival Time: xx</p>
                </div>
            </div>
        </div>
        <!-- Duplicate the above block for more orders -->
    </div>
</main>

<!-- Footer -->
<footer class="bottom-nav d-flex justify-content-around align-items-center fixed-bottom">
    <a href="index.php">Home</a>
    <a href="menu.php">products</a>
    <a href="#" class="active">Orders</a>
    <a href="account.php">Account</a>
</footer>
</body>

</html>
