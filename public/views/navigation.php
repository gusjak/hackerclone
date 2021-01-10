<nav>
    <ul class="navlinks">
        <li><a href="/index.php">Home</a></li>
        <!-- Views for logged in user profile only. Else redirect to Login page--->

        <?php if (userIsLoggedIn()) : ?>
            <a href="/createpost.php">Create Post</a>
            <a href="/tos.php">Rules</a>
            <a href="/profile.php?id=<?php echo $_SESSION['user']['id']; ?>">Account</a>
            <a href="app/users/logout.php">Logout</a>

        <?php else : ?>
            <li><a href="/login.php">Login</a></li>
            <li><a href="/tos.php">Rules</a></li>


        <?php endif; ?>
    </ul>
</nav>