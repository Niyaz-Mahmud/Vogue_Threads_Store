<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogue Threads - Modern Fashion Destination</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars('../styles.css'); ?>">
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
                <li><a href="<?php echo htmlspecialchars('index.php'); ?>"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="<?php echo htmlspecialchars('../main/index.php#collections'); ?>"><i class="fas fa-th-large"></i> Collections</a></li>
                <li><a href="<?php echo htmlspecialchars('contact.php'); ?>"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
            <div class="nav-icons">
                <div class="search-container hidden">
                    <input type="text" class="search-box" placeholder="Search..." id="search-box">
                    <a href="#search" class="search-icon">
                        <span class="material-icons">search</span>
                    </a>
                </div>
                <div class="nav-icons">
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) : ?>
                        <span class="user-name"><?php echo htmlspecialchars($_SESSION['full_name']); ?></span>
                        <a href="index.php" class="account-icon" title="View Profile">
                            <span class="material-icons">account_circle</span>
                        </a>
                    <?php else : ?>
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
        <section id="mens-collection" class="collection-section">
            <div id="mens-collection-header">
                <h2>Men's Collection</h2>
                <p>Explore our latest styles for the modern man</p>
            </div>

            <div id="mens-collection-grid">
                <div class="collection-item" id="tshirt-item">
                    <img src="<?php echo htmlspecialchars('../Pictures/Men/t-shirts/tshirt (2).jpg'); ?>" alt="Men's T-Shirt">
                    <div class="item-overlay">
                        <h3>Men's T-Shirt</h3>
                        <p>Comfortable and trendy T-shirts for casual wear.</p>
                        <a href="product-page.php?category=men&subcategory=tShirts" class="shop-link">
                            <button>View Product</button>
                        </a>
                    </div>
                </div>

                <div class="collection-item" id="shirt-item">
                    <img src="<?php echo htmlspecialchars('../Pictures/Men/Shirts/menshirtcover.png'); ?>" alt="Men's Shirt">
                    <div class="item-overlay">
                        <h3>Men's Shirt</h3>
                        <p>Classic, stylish shirts for a polished look.</p>
                        <a href="product-page.php?category=men&subcategory=shirts" class="shop-link">
                            <button>View Product</button>
                        </a>
                    </div>
                </div>

                <div class="collection-item" id="pants-item">
                    <img src="<?php echo htmlspecialchars('../Pictures/Men/pants/pant (2).jpg'); ?>" alt="Men's Pants">
                    <div class="item-overlay">
                        <h3>Men's Pants</h3>
                        <p>Perfectly fitted pants for everyday wear.</p>
                        <a href="product-page.php?category=men&subcategory=pants" class="shop-link">
                            <button>View Product</button>
                        </a>
                    </div>
                </div>

                <div class="collection-item" id="jacket-item">
                    <img src="<?php echo htmlspecialchars('../Pictures/Men/jackets/jacket (4).jpg'); ?>" alt="Men's Jacket">
                    <div class="item-overlay">
                        <h3>Men's Jacket</h3>
                        <p>Stylish and warm jackets for every season.</p>
                        <a href="product-page.php?category=men&subcategory=jackets" class="shop-link">
                            <button>View Product</button>
                        </a>
                    </div>
                </div>

                <div class="collection-item" id="shoes-item">
                    <img src="<?php echo htmlspecialchars('../Pictures/Men/Shoes/shoe (3).png'); ?>" alt="Men's Shoes">
                    <div class="item-overlay">
                        <h3>Men's Shoes</h3>
                        <p>Comfortable and stylish shoes for every occasion.</p>
                        <a href="product-page.php?category=men&subcategory=shoes" class="shop-link">
                            <button>View Product</button>
                        </a>
                    </div>
                </div>
            </div>
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
            &copy; <?php echo date('Y'); ?> Vogue Threads. All Rights Reserved.
        </div>
    </footer>
    
    <script src="<?php echo htmlspecialchars('../scripts.js'); ?>"></script>
</body>

</html>
