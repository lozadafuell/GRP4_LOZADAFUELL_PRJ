<header>
    <div class='navbar'>
    <h1>Aurele</h1>
    <nav>
        <ul>
            <li><a href="index.php?page=home" class="<?php echo $currentPage == 'home' ? 'active' : ''; ?>">Home</a></li>
            <li><a href="index.php?page=about" class="<?php echo $currentPage == 'about' ? 'active' : ''; ?>">About</a></li>
            <li><a href="index.php?page=contact" class="<?php echo $currentPage == 'contact' ? 'active' : ''; ?>">Contact</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="index.php?page=login">Login</a></li>
                <li><a href="index.php?page=register">Register</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    </div>
</header>