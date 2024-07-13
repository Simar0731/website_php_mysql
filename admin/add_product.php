<?php include '../includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>Add Product</h1>
        <form action="add_product_process.php" method="post" enctype="multipart/form-data">
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" required>
            
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
            
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" required>
            
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" required>
            
            <input type="submit" value="Add Product">
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
