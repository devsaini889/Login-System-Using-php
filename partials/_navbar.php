<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    nav {
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #007bff;
    }

    .nav-links {
      display: flex;
      gap: 1.5rem;
    }

    .nav-links a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #007bff;
    }

    /* Hamburger Menu */
    .menu-toggle {
      display: none;
    }

    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 5px;
    }

    .hamburger div {
      width: 25px;
      height: 3px;
      background-color: #333;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .hamburger {
        display: flex;
      }

      .nav-links {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: #fff;
        flex-direction: column;
        display: none;
        text-align: center;
        padding: 1rem 0;
      }

      .menu-toggle:checked + .hamburger + .nav-links {
        display: flex;
      }
    }
  </style>
</head>
<body>

  <nav>
    <div class="nav-container">
      <div class="logo">LOGER</div>
      <input type="checkbox" id="menu-toggle" class="menu-toggle">
      <label for="menu-toggle" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </label>
      <div class="nav-links">
        <a href="welcome.php">Home</a>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
        <a href="signout.php">Sign Out</a>
      </div>
    </div>
  </nav>

</body>
</html>
