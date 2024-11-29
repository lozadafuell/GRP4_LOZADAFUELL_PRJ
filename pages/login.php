<?php
include __DIR__ . '/../includes/db.php';

$username = $_COOKIE['username'] ?? '';
$message = $_GET['message'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;

        if (!empty($_POST['remember'])) {
            setcookie('username', $username, time() + (86400 * 30), "/");
        } else {
            setcookie('username', '', time() - 3600, "/");
        }
        
        header("Location: index.php?page=home");
        exit;
    } else {
        $error = "Invalid credentials.";
    }
}
?>

<h2>Login</h2>
<?php 
if (!empty($message)) echo "<p style='color:green;'>$message</p>";
if (!empty($error)) echo "<p style='color:red;'>$error</p>"; 
?>
<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($username); ?>" required>
    
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    
    <label>
        <input type="checkbox" name="remember" <?php if (!empty($_COOKIE['username'])) echo 'checked'; ?>> Remember Me
    </label>
    
    <button type="submit">Login</button>
</form>
