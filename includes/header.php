<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Aurele® Official Website - Luxury Watchmaker since 1997'; ?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
<?php include 'navbar.php'; ?>
<?php
if (isset($_SESSION['username'])) {
    echo "<p>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</p>";
}
?>