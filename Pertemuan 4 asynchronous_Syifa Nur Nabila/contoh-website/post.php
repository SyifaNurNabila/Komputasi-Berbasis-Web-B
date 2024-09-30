<?php
    // --- GET DAN POST ---
    if (isset($_POST['submit'])) {
        echo $_POST['password'];
    }
    ?>
    <form action="post.php" method="post">
        <input type="text" name="nama" placeholder="Enter your name" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="submit" name="submit" value="Submit">
    </form>