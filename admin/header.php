<div class="header">
    <div class="logo"><img src="../assets/logo.jpg" alt="orange hive logo"></div>
    <div class="nav"><nav>
        <a href="index.php?page=home">Home</a> |
        <?php
            if (isset($_SESSION)) {
                echo '<a href="index.php?page=login">Logout</a>';
                session_destroy();
            } else {
                echo '<a href="index.php?page=login">Login</a>';
            }
        ?>
    </nav> 
    </div>
</div>