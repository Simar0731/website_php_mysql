<?php
// Include database connection
include '../includes/db_connect.php';

// Initialize variables for search and category filtering
$search = isset($_GET['search']) ? $_GET['search'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';

// SQL query to fetch products based on search and category filters
$sql = "SELECT * FROM products";
if (!empty($search)) {
    $sql .= " WHERE name LIKE '%$search%'";
    if (!empty($category)) {
        $sql .= " AND category = '$category'";
    }
} elseif (!empty($category)) {
    $sql .= " WHERE category = '$category'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>Products</h1>
        <form action="" method="get">
            <input type="text" name="search" placeholder="Search products" value="<?php echo htmlspecialchars($search); ?>">
            <select name="category">
                <option value="">All Categories</option>
                <option value="electronics" <?php if ($category == 'electronics') echo 'selected'; ?>>Electronics</option>
                <option value="fashion" <?php if ($category == 'fashion') echo 'selected'; ?>>Fashion</option>
                <option value="home" <?php if ($category == 'home') echo 'selected'; ?>>Home</option>
            </select>
            <input type="submit" value="Search">
        </form>
        <div class="product-list">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="../images/' . $row["image"] . '" alt="' . $row["name"] . '">';
                    echo '<h2>' . $row["name"] . '</h2>';
                    echo '<p>' . $row["description"] . '</p>';
                    echo '<p>$' . $row["price"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "<p>No products found.</p>";
            }
            ?>
        </div>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
