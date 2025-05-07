<?php
$nm = $_POST["name"];
$mail = $_POST["email"];
$pass = $_POST["password"];


$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "INSERT INTO `users` (`sno`, `Name`, `email`, `password`) 
        VALUES (NULL, '$nm', '$mail', '$hashed_pass')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    $result = mysqli_query($conn , "SELECT * FROM `users` WHERE `sno` = $last_id");

    if ($num = mysqli_fetch_assoc($result)) {
        echo '
        <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f5f5f5;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .card {
                    background-color: white;
                    padding: 30px;
                    border-radius: 12px;
                    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                    text-align: center;
                    max-width: 400px;
                }
                .card h2 {
                    color: #4CAF50;
                    margin-bottom: 10px;
                }
                .card p {
                    margin: 5px 0;
                    color: #333;
                }
                .btn {
                    display: inline-block;
                    margin-top: 20px;
                    padding: 10px 20px;
                    background-color: #4CAF50;
                    color: white;
                    text-decoration: none;
                    border-radius: 6px;
                    font-size: 16px;
                    transition: background-color 0.3s ease;
                }
                .btn:hover {
                    background-color: #45a049;
                }
            </style>
        </head>
        <body>
            <div class="card">
                <h2>Welcome, ' . htmlspecialchars($num['Name']) . '!</h2>
                <p><strong>Your Email:</strong> ' . htmlspecialchars($num['email']) . '</p>
                <p>You have successfully registered.</p>
                <a class="btn" href="http://localhost/loginsystem/login.php">Go to Login Page</a>
            </div>
        </body>
        </html>
        ';
    }

} else {
    if (mysqli_errno($conn) == 1062) {
        // Duplicate entry error
        header("Location: /loginsystem/signup.php?error=exists");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
