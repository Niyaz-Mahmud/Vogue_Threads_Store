<?php
session_start();

$conn = new mysqli("localhost", "root", "", "vogue_threads");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    
    $errors = [];

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT id, full_name, password FROM users WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['logged_in'] = true;

                $stmt->close();
                $conn->close();

                header("Location: index.php");
                exit();
            } else {
                $errors[] = "Invalid email or password";
            }
        } else {
            $errors[] = "Invalid email or password";
        }
        
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vogue Threads - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #000000;
            --secondary-color: #ffffff;
            --text-color: #333333;
            --border-color: #e0e0e0;
            --accent-color: #6b6b6b;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, var(--primary-color) 30%, var(--secondary-color) 70%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
            perspective: 1000px;
        }

        .login-container {
            width: 400px;
            background: var(--secondary-color);
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 40px;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--primary-color);
            transform-style: preserve-3d;
            transition: all 0.6s ease;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(
                transparent 0,
                rgba(0,0,0,0.03) 50px,
                transparent 100px
            );
            opacity: 0.1;
        }

        .login-container:hover {
            box-shadow: 0 30px 50px rgba(0,0,0,0.2);
        }

        .logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
            position: relative;
        }

        .logo {
            width: 80px;
            height: 80px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 15px;
            position: relative;
            overflow: hidden;
            animation: logo-pulse 2s ease-in-out infinite;
        }

        .logo::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                transparent 0%, 
                rgba(255,255,255,0.2) 50%, 
                transparent 100%
            );
            transform: rotate(45deg);
            animation: shine 3s infinite linear;
        }

        @keyframes shine {
            0% { transform: rotate(45deg) translateX(-100%); }
            100% { transform: rotate(45deg) translateX(100%); }
        }

        @keyframes logo-pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
                box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
            }
        }

        .logo span {
            color: var(--secondary-color);
            font-size: 30px;
            font-weight: bold;
            position: relative;
            z-index: 1;
        }

        .website-name {
            font-size: 24px;
            color: var(--primary-color);
            font-weight: bold;
            letter-spacing: -0.5px;
            position: relative;
        }

        .website-name::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, transparent, var(--primary-color), transparent);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .login-container:hover .website-name::after {
            transform: scaleX(1);
        }

        .login-form {
            position: relative;
            z-index: 1;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 45px 12px 15px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            outline: none;
            transition: all 0.3s ease;
            background-color: var(--secondary-color);
            color: var(--primary-color);
            position: relative;
        }

        .form-group input::placeholder {
            color: var(--accent-color);
            opacity: 0.7;
        }

        .form-group input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--primary-color);
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .password-toggle:hover {
            color: #888;
            transform: translateY(-50%) scale(1.2);
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background: var(--primary-color);
            color: var(--secondary-color);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                120deg, 
                transparent, 
                rgba(255,255,255,0.3), 
                transparent
            );
            transition: all 0.6s;
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .form-links {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .form-links a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease, transform 0.3s ease;
            position: relative;
        }

        .form-links a::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .form-links a:hover::after {
            width: 100%;
        }

        .form-links a:hover {
            color: #888;
            transform: translateX(5px);
        }

        .error-message {
            color: var(--error-color);
            background-color: rgba(255, 0, 0, 0.1);
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
            border: 1px solid var(--error-color);
        }

        .success-message {
            color: #008000;
            background-color: rgba(0, 128, 0, 0.1);
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
            border: 1px solid #008000;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo-container">
            <div class="logo">
                <span>VT</span>
            </div>
            <div class="website-name">Vogue Threads</div>
        </div>

        <?php
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<div class='error-message'>$error</div>";
            }
        }

        if (isset($_SESSION['success'])) {
            echo "<div class='success-message'>" . $_SESSION['success'] . "</div>";
            unset($_SESSION['success']);
        }
        ?>

        <form class="login-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" required 
                       value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <div class="password-toggle" onclick="togglePassword()">
                    👁️
                </div>
            </div>
            
            <button type="submit" class="submit-btn">Login</button>
            
            <div class="form-links">
                <a href="forgotpassword.php">Forgot Password?</a>
                <a href="signup.php">Create Account</a>
            </div>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        }

        setTimeout(function() {
            document.querySelectorAll('.error-message, .success-message').forEach(function(msg) {
            msg.style.display = 'none';
            });
        }, 3000);

    </script>
</body>
</html>
