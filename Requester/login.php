<?php
session_start();
$error = '';

// Path to user data file
$usersFile = 'users.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Basic validation
    if (empty($email) || empty($password)) {
        $error = "Please enter both email and password.";
    } else {
        // Check credentials against registered users
        $authenticated = false;
        $loggedInUsername = '';
        if (file_exists($usersFile)) {
            $existingUsers = file($usersFile, FILE_IGNORE_NEW_LINES);
            foreach ($existingUsers as $userLine) {
                list($savedUsername, $savedEmail, $savedHash) = explode(',', $userLine);
                if ($savedEmail === $email && password_verify($password, $savedHash)) {
                    $authenticated = true;
                    $loggedInUsername = $savedUsername;
                    break;
                }
            }
        }

        if ($authenticated) {
            $_SESSION['user_email'] = $email;
            $_SESSION['username'] = $loggedInUsername;
            header("Location: ../index.php");
            exit();
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Citycare Services</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-container {
            display: flex;
            max-width: 850px;
            margin: 50px auto;
            box-shadow: 0 2px 12px rgb(0 0 0 / 0.1);
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
        }
        .login-wrapper {
            flex: 1;
            padding: 40px 30px 30px 30px;
            background: #fff;
        }
        .login-title {
            text-align: center;
            font-weight: 700;
            font-size: 2rem;
            color: #333;
            margin-bottom: 25px;
        }
        .form-control {
            height: 50px;
            font-size: 1.1rem;
            border: 1.5px solid #ddd;
            border-radius: 8px;
            transition: border-color 0.25s ease;
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 8px rgba(13, 110, 253, 0.25);
        }
        .btn-login {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 12px 0;
            border-radius: 8px;
            border: none;
            width: 100%;
            transition: background 0.3s ease;
        }
        .btn-login:hover {
            background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%);
        }
        .alert {
            font-size: 0.95rem;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
            font-weight: 500;
        }
        .register-link a {
            color: #2575fc;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        .side-register-section {
            flex: 1;
            background: #6a11cb;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 30px;
            text-align: center;
            position: relative;
        }
        .side-register-section h3 {
            margin-bottom: 15px;
            font-size: 1.8rem;
            font-weight: 700;
            position: relative;
            z-index: 2;
        }
        .side-register-section p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }
        .btn-register-side {
            background: white;
            color: #6a11cb;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 12px 40px;
            border-radius: 8px;
            border: none;
            text-decoration: none;
            transition: background 0.3s ease;
            position: relative;
            z-index: 2;
        }
        .btn-register-side:hover {
            background: #fff5fb;
            color: #4b0e95;
        }
        .side-register-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
            border-radius: inherit;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-wrapper">
            <h2 class="login-title">Login to Your Account</h2>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form method="post" action="login.php" novalidate>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required autofocus />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required />
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>
            <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
        </div>
        <!-- Removed side-register-section with icon and purple background to comply with request -->
        <!--
        <div class="side-register-section">
            <h3>New Here?</h3>
            <p>Create an account to get started with Citycare Services.</p>
            <a href="register.php" class="btn-register-side">Register</a>
        </div>
        -->
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
