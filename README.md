# Login System Project

This project implements a simple login system with the ability to sign up, log in, and reset forgotten passwords. It uses PHP for the backend and MySQL for database management.

## Project Folder Structure

login-system/
│
├── partials/
│ ├── _navbar.php # Navigation bar includes common header
│ ├── _dbconnect.php # Database connection setup
│ ├── _loginconnect.php # Logic for user login
│ ├── _forgetpass.php # Logic for forgotten password
│
├── welcome.php # Welcome page after successful login
├── login.php # Login page
├── signup.php # Signup page
└── logout.php # Logout functionality



## Features

- **Sign Up**: Users can create a new account.
- **Login**: Users can log in using their credentials.
- **Forgot Password**: Users can reset their password if they forget it.
- **Logout**: Users can log out from the system.
- **Responsive**: The login and signup forms are responsive and adapt to different screen sizes.

## Prerequisites

- **PHP**: Version 7.0 or higher
- **MySQL**: Version 5.7 or higher
- **A web server**: Apache (included in XAMPP)
- **Database**: Create a database named `users` in MySQL to store user credentials.

## Steps to Setup

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/devsaini889/Login-System-Using-php.git
    cd login-system
    ```

2. **Setup XAMPP**:
    - Install and set up XAMPP on your local machine (if you haven't already).
    - Start Apache and MySQL from the XAMPP control panel.

3. **Setup Database**:
    - Open **phpMyAdmin** by navigating to `http://localhost/phpmyadmin/` in your browser.
    - Create a MySQL database named `users` and set up the required table:
      ```sql
      CREATE DATABASE users;
      USE users;
      CREATE TABLE users (
          id INT AUTO_INCREMENT PRIMARY KEY,
          email VARCHAR(255) NOT NULL UNIQUE,
          password VARCHAR(255) NOT NULL
      );
      ```

4. **Database Connection**:
    - Edit the `_dbconnect.php` file inside the `partials` folder to match your database credentials (username, password, and host). By default, XAMPP uses `root` as the username and no password.

5. **Run the Project**:
    - Place the project folder `login-system` in the `htdocs` directory of your XAMPP installation (usually `C:\xampp\htdocs\`).
    - Access the project through your browser by going to:
      ```
      http://localhost/login-system/login.php
      ```

6. **Register a New Account**:
    - Go to the `signup.php` page and create a new account.

7. **Login**:
    - After registering, log in using the `login.php` page with the credentials you created.

8. **Forgot Password**:
    - If you forget your password, use the `forgot.php` page to reset it. An email will be sent with the reset link (if you configure the email logic).

## File Descriptions

- **partials/_navbar.php**: Contains the navigation bar used across the pages.
- **partials/_dbconnect.php**: Connects to the MySQL database.
- **partials/_loginconnect.php**: Handles user login logic.
- **partials/_forgetpass.php**: Handles password reset requests and updates the password in the database.
- **welcome.php**: A page shown after a successful login.
- **login.php**: The login page where users can enter their credentials.
- **signup.php**: The signup page where new users can create accounts.
- **logout.php**: Logs the user out and redirects them to the login page.

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Open a pull request.

