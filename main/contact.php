<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogue Threads - Modern Fashion Destination</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars("../styles.css"); ?>">
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
                <li><a href="<?php echo htmlspecialchars("index.php"); ?>"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="<?php echo htmlspecialchars("../main/index.php#collections"); ?>"><i class="fas fa-th-large"></i> Collections</a></li>
                <li><a href="<?php echo htmlspecialchars("contact.php"); ?>"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
            <div class="nav-icons">
                <div class="search-container hidden">
                    <input type="text" class="search-box" placeholder="Search..." id="search-box">
                    <a href="#search" class="search-icon">
                        <span class="material-icons">search</span>
                    </a>
                </div>
                <div class="nav-icons">
                    <?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true): ?>
                        <span class="user-name"><?php echo htmlspecialchars($_SESSION["full_name"]); ?></span>
                        <a href="index.php" class="account-icon" title="View Profile">
                            <span class="material-icons">account_circle</span>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo htmlspecialchars("login.php"); ?>" class="account-icon" title="Login">
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
        <section id="contact-section" class="contact-section">
            <h2>Contact Us</h2>
            <p>We'd love to hear from you! Fill out the form below or reach out to us using the contact information provided.</p>

            <div class="contact-info">
                <div class="contact-method">
                    <h3>Phone</h3>
                    <p>+1 (800) 123-4567</p>
                </div>
                <div class="contact-method">
                    <h3>Email</h3>
                    <p>support@voguethreads.com</p>
                </div>
                <div class="contact-method">
                    <h3>Address</h3>
                    <p>123 Vogue St, Fashion City, FC 45678</p>
                </div>
            </div>

            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" placeholder="Write your message here" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
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
            &copy; <?php echo date("Y"); ?> Vogue Threads. All Rights Reserved.
        </div>
    </footer>

    <script src="<?php echo htmlspecialchars("../scripts.js"); ?>"></script>
</body>

</html>
