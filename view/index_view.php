<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Yume Ramen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/cart.js" defer></script>
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
        <?php
            foreach ($dishes as $dish) {
                ?>
                <div class="col-md-4 mb-3 card">
                    <div class="menu-container">
                        <img src="<?= htmlspecialchars($dish->imageUrl) ?>" alt="<?= htmlspecialchars($dish->dishName) ?>">
                        <div class="text-center text-container">
                            <h5 class="card-title"><?= htmlspecialchars($dish->dishName) ?></h5>
                            <p class="card-text">€<?= htmlspecialchars($dish->price) ?></p>
                        </div>
                    </div>
                    <button class="btn btn-success" onclick="addToCart('<?= addslashes($dish->dishName) ?>', <?= htmlspecialchars($dish->price) ?>)">Add to Cart</button>
                </div>
                <?php } ?>
    </div>
</main>

<!-- Footer -->
<footer class="bottom-nav d-flex justify-content-around align-items-center fixed-bottom">
    <a href="#" class="active">Home</a>
    <a href="menu.php">products</a>
    <a href="orders.php">Orders</a>
    <a href="account.php">Account</a>
</footer>
</body>
</html>
