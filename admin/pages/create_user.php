<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }
    
?>

<h2>Create a new user</h2>

<form action="pages/inc/create_user.inc.php" method="post">

    <p>Username: <input name="username" type="text" required></p>

    <p>Password: <input name="password" type="password" required></p>

    <p>First Name: <input name="firstName" type="text" required></p>

    <p>Last Name: <input name="LastName" type="text" required></p>

    <p>E-Mail: <input name="email" type="text" required></p>

    <p><input type="submit" name="submit" value="Submit"></p>

</form>