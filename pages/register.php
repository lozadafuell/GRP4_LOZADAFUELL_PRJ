<?php
include __DIR__ . '/../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

    try {
        $stmt->execute(['username' => $username, 'password' => $hashedPassword]);
        
        header("Location: index.php?page=login&message=Registration successful! Please log in.");
        exit;
    } catch (PDOException $e) {
        if ($e->getCode() === '23000') {
            $errorMessage = "Username already taken.";
        } else {
            $errorMessage = "An error occurred during registration.";
        }
    }
}
?>

<h2>Register</h2>
<?php 
if (!empty($errorMessage)) echo "<p style='color:red;'>$errorMessage</p>";
?>
<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    
    <button type="submit">Register</button>
</form>
