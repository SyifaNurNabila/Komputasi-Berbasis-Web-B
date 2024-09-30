<?php
    // --- GET DAN POST ---
    if (isset($_GET['submit'])) {
        echo $_GET['password'];
    }
    ?>
    <form action="get.php" method="get">
        <input type="text" name="nama" placeholder="Enter your name" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="submit" name="submit" value="Submit">
    </form>