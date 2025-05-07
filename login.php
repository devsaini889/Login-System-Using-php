<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      display: flex;
      flex-direction: column;
    }

    nav {
      background: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
     
    }

    .main-content {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    .login-container {
      background: #fff;
      padding: 2.5rem;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
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

    .form-group input:focus {
      border-color: #2575fc;
      outline: none;
    }

    .login-btn {
      width: 100%;
      padding: 0.75rem;
      background: #2575fc;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login-btn:hover {
      background: #1a5edb;
    }

    .extra-options {
      text-align: center;
      margin-top: 1rem;
    }

    .extra-options a {
      color: #2575fc;
      text-decoration: none;
      font-size: 0.95rem;
    }

    .extra-options a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Include PHP Navbar -->
  <nav>
    <?php require 'partials/_navbar.php'; ?>
  </nav>

  <div class="main-content">
    <div class="login-container">
      <h2>Login</h2>
      <form action="partials/_loginconnect.php" method="post">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" class="login-btn">Sign In</button>
      </form>
      <div class="extra-options">
        <p><a href="partials/_forgetpass.php">Forgot Password?</a></p>
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
      </div>
    </div>
  </div>

</body>
</html>
