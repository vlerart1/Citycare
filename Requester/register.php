<?php
session_start();
$error = '';
$success = '';

// Simple storage for registered users - here using a file for demo purposes.
// In production, use a database.
$usersFile = 'users.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "Please fill in all fields.";
    } elseif (!preg_match('/^[A-Za-z0-9_]{3,20}$/', $username)) {
        $error = "Username must be 3-20 characters and only letters, numbers, and underscores are allowed.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Check if username or email already exists
        $existingUsers = file_exists($usersFile) ? file($usersFile, FILE_IGNORE_NEW_LINES) : [];
        $userExists = false;
        foreach ($existingUsers as $userLine) {
            $userLine = trim($userLine);
            $userData = explode(',', $userLine);
            if(count($userData) !== 3) {
                continue; // skip malformed lines
            }
            list($savedUsername, $savedEmail, $savedHash) = $userData;
            if ($savedEmail === $email) {
                $error = "Email is already registered.";
                $userExists = true;
                break;
            }
            if ($savedUsername === $username) {
                $error = "Username is already taken.";
                $userExists = true;
                break;
            }
        }

        if (!$userExists) {
            // Save user (username,email,password_hash)
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            file_put_contents($usersFile, $username . ',' . $email . ',' . $passwordHash . PHP_EOL, FILE_APPEND);
            $success = "Registration successful, you may now <a href='login.php'>login</a>.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register - Citycare Services</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .register-wrapper {
            max-width: 420px;
            margin: 50px auto;
            background: #fff;
            box-shadow: 0 2px 12px rgb(0 0 0 / 0.1);
            border-radius: 10px;
            padding: 40px 30px 30px 30px;
        }
        .register-title {
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
        .btn-register {
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
        .btn-register:hover {
            background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%);
        }
        .alert {
            font-size: 0.95rem;
            margin-bottom: 20px;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
            font-weight: 500;
        }
        .login-link a {
            color: #2575fc;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-wrapper">
        <h2 class="register-title">Create a new account</h2>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
        <?php elseif ($success): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        <form method="post" action="register.php" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Choose a username" required autofocus />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required />
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required />
            </div>
            <button type="submit" class="btn-register">Register</button>
        </form>
        <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
