<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogue Threads - Modern Fashion Destination</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Two+Tone" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <div class="logo">Vogue Threads</div>
            <ul class="nav-menu">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="../main/index.php#collections"><i class="fas fa-th-large"></i> Collections</a></li>
                <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
            <div class="nav-icons">
                <div class="search-container hidden">
                    <input type="text" class="search-box" placeholder="Search..." id="search-box">
                    <a href="#search" class="search-icon">
                        <span class="material-icons">search</span>
                    </a>
                </div>
                <div class="nav-icons">
                    <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                        <span class="user-name"><?php echo htmlspecialchars($_SESSION['full_name']); ?></span>
                        <a href="index.php" class="account-icon" title="View Profile">
                            <span class="material-icons">account_circle</span>
                        </a>
                  
                    <?php else: ?>
                        <a href="<?php echo htmlspecialchars('login.php'); ?>" class="account-icon" title="Login">
                            <span class="material-icons">account_circle</span>
                        </a>
                    <?php endif; ?>
                </div>
                <a href="javascript:void(0)" class="cart-icon">
                    <span class="material-icons">shopping_cart</span>
                    <span class="cart-count">0</span>
                </a>
                <a href="logout.php" class="logout-button">
            <span class="material-icons">exit_to_app</span> Logout
        </a>
            </div>        
        </nav>
    </header>

    <main>
        <section id="collections">
            <select id="sort-options" onchange="sortProducts()">
                <option value="default">Sort by Default</option>
                <option value="price-asc">Price: Low to High</option>
                <option value="price-desc">Price: High to Low</option>
                <option value="name-asc">Name: A to Z</option>
                <option value="name-desc">Name: Z to A</option>
            </select>

            <section id="accessories-section">
                <h1>Accessories</h1>
                <div class="product-container" id="accessories-products"></div>
            </section>

            <section id="men-section">
                <h1>Men's Collection</h1>
                <div class="product-container" id="men-products"></div>
            </section>

            <section id="women-section">
                <h1>Women's Collection</h1>
                <div class="product-container" id="women-products"></div>
            </section>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">Vogue Threads</div>
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#shipping">Shipping & Returns</a>
            </div>
            <div class="social-links">
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.x.com/"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="copyright">
            &copy; <?php echo date("Y"); ?> Vogue Threads. All Rights Reserved.
        </div>
    </footer>
    <script src="<?php echo htmlspecialchars('../scripts.js'); ?>"></script>
</body>
</html>
