<?php
session_start();
$error = '';
$success = '';

// Simple storage for registered users - here using a file for demo purposes.
// In production, use a database.
$usersFile = 'users.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (empty($email) || empty($password) || empty($confirm_password)) {
        $error = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Check if user already exists
        $existingUsers = file_exists($usersFile) ? file($usersFile, FILE_IGNORE_NEW_LINES) : [];
        $userExists = false;
        foreach ($existingUsers as $userLine) {
            list($savedEmail, $savedHash) = explode(',', $userLine);
            if ($savedEmail === $email) {
                $userExists = true;
                break;
            }
        }

        if ($userExists) {
            $error = "Email is already registered.";
        } else {
            // Save user (email,password_hash)
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            file_put_contents($usersFile, $email . ',' . $passwordHash . PHP_EOL, FILE_APPEND);
            $success = "Registration successful, you may now <a href='login.php'>login</a>.";
        }
    }
}
?>
