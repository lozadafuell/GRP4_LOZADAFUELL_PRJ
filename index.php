<?php
session_start();

$page = $_GET['page'] ?? 'home';
$currentPage = $page;

$allowedPages = ['home', 'about', 'contact', 'login','register'];

include 'includes/header.php';

if (in_array($page, $allowedPages)) {
    include "pages/{$page}.php";
} else {
    echo "<h2>404 - Page Not Found</h2><p>The page you requested does not exist.</p>";
}

include 'includes/footer.php';
?>
