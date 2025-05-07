<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        nav {
            background-color: #0077cc;
            padding: 1em;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            padding: 2rem;
        }

        .welcome-box {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            max-width: 600px;
            margin: 2rem auto;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .welcome-box h1 {
            margin-bottom: 1rem;
        }

        .welcome-box p {
            color: #555;
            margin: 0.5em 0;
        }

        .logout-link {
            display: inline-block;
            margin-top: 1.5rem;
            text-decoration: none;
            color: #0077cc;
            font-weight: bold;
        }

        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<nav>
    <?php require 'partials/_navbar.php'; ?>
</nav>

<div class="container">
    <div class="welcome-box">
        <h1>Welcome</h1>
        <p>We're glad to have you back on our platform.</p>
        <p>Explore your dashboard and manage your activities with ease.</p>
        <p>Stay connected and enjoy a seamless experience.</p>
        <p>Your security and satisfaction are our priorities.</p>
        
        <a href="logout.php" class="logout-link">Click here to log out</a>
    </div>
</div>

</body>
</html>
