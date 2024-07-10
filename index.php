<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="banner">
            <h1>Welcome to Our Store</h1>
            <p>Discover the latest trends in electronics, fashion, and home goods.</p>
        </section>
        
        <section class="featured-products">
            <h2>Featured Products</h2>
            <div class="product-list">
                <?php
                $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 4";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="product">';
                        echo '<img src="images/' . $row["image"] . '" alt="' . $row["name"] . '">';
                        echo '<h3>' . $row["name"] . '</h3>';
                        echo '<p>$' . $row["price"] . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo "No products found.";
                }
                ?>
            </div>
        </section>

        <section class="about-us">
            <h2>About Us</h2>
            <p> At simars, we're passionate innovators redefining online shopping. Established in 2021,our mission is to empower seller with innovative solutions/products that enhance people life. Since 2018, we've been committed to making the life of people better, striving to make a meaningful impact in e-tailing.</p>
            <a href="about/about.php">Learn More</a>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
