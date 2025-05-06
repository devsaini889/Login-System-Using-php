<?php

$mail = $_POST['email'];
$pass = $_POST['password'];


$servername = "localhost";
$username = "root";
$db_password = "";
$database = "users";

$conn = mysqli_connect($servername, $username, $db_password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM users WHERE email = '$mail' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);


if ($num == 1) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $mail;
    header("Location: http://localhost/loginsystem/welcome.php");
    exit;
} else {
   
    echo "
    <div style='text-align: center; margin-top: 100px; font-family: Arial;'>
        <h2>🕵️ Oops! Wrong credentials, Agent 007!</h2>
        <p>Your mission to log in has failed. Please try again with the correct intel. 😅</p>
        <a href='http://localhost/loginsystem/login.php'>
            <button style='
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                margin-top: 20px;
            '>Back to Login</button>
        </a>
    </div>
    ";
}


mysqli_close($conn);
?>
