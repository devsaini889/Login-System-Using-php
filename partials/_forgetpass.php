<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .box {
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 1rem;
      color: #333;
    }
    .form-group {
      margin-bottom: 1rem;
    }
    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
    }
    .form-group input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }
    .btn {
      width: 100%;
      padding: 0.75rem;
      background: #2575fc;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      margin-top: 1rem;
    }
    .btn:hover {
      background: #1a5edb;
    }
    .message {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.95rem;
    }
  </style>
</head>
<body>

<div class="box">
  <h2>Reset Password</h2>
  <form method="POST" action="">
    <div class="form-group">
      <label for="email">Registered Email</label>
      <input type="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="new_password">New Password</label>
      <input type="password" name="new_password" required>
    </div>
    <button class="btn" type="submit" name="reset">Reset Password</button>
  </form>

  <?php
  if (isset($_POST['reset'])) {
      $email = $_POST['email'];
      $new_password = $_POST['new_password'];

      // Database connection
      $conn = mysqli_connect("localhost", "root", "", "users");

      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      // Check if user exists
      $check = "SELECT * FROM users WHERE email = '$email'";
      $res = mysqli_query($conn, $check);

      if (mysqli_num_rows($res) == 1) {
        $update = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
        if (mysqli_query($conn, $update)) {
            echo "<p class='message' style='color:green;'>✅ Password successfully updated! Redirecting to login...</p>";
            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'http://localhost/loginsystem/login.php';
                    }, 2000);
                  </script>";
        } else {
            echo "<p class='message' style='color:red;'>❌ Error updating password!</p>";
        }
    } else {
        echo "<p class='message' style='color:red;'>⚠️ Email not found!</p>";
    }
      mysqli_close($conn);
  }
  ?>
</div>

</body>
</html>
