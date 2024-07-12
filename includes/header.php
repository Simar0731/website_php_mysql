<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS file -->
    <style>
        /* Additional styles specific to the header */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        header a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
        }
        header a:hover {
            background-color: #555;
        }
        .login-link {
            float: right;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your Website</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products\products.php">Products</a></li>
                <li><a href="about\about.php">About Us</a></li>
                <li><a href="contact/contact.php">Contact</a></li>
                <?php
                session_start();
                if (isset($_SESSION['username'])) {
                    echo '<li><a href="user\logout.php">Logout</a></li>';
                } else {
                    echo '<li class="login-link"><a href="user/login.php">Login</a></li>';
                }
                ?>
                <a href="user\register.php">Register</a>
            </ul>
        </nav>
    </header>
