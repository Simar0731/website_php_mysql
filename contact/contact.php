<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>Contact Us</h1>
        <form action="contact_process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            
            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>
            
            <input type="submit" value="Send Message">
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
