<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Signup Page</title>
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
    .main-content {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }
    nav {
      background: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
     
     
    }

    .signup-container {
      background: #fff;
      padding: 2.5rem;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 450px;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 1.5rem;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
    }

    input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    input:focus {
      border-color: #2575fc;
      outline: none;
    }

    .signup-btn {
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

    .signup-btn:hover {
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

    <nav>
    <?php require 'partials/_navbar.php'; ?>
  </nav>
  <div class="main-content">
    <div class="signup-container">
        <h2>Create Account</h2>
        <form action="process_signup.php" method="POST">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required />
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
        </div>

        <button type="submit" class="signup-btn">Sign Up</button>
        </form>

        <div class="extra-options">
        <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
   </div>
</body>
</html>
