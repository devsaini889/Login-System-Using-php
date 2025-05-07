<title>Welcome</title>

<nav>
    <?php require 'partials/_navbar.php'; ?>
  </nav>

<?php
session_start();

if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin'] != true) {
    header("Location: login.php");
    exit;
}

?>