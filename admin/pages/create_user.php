<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }
    
?>

<style>

    .save_button {
        background: #2b2b2f;
        font-size: 8px;
        border: none;
        color: white;
        padding: 10px 14px;
        font-size: 14px;
        width: 120px;
        margin-top: 40px;
    }
    .save_button:hover {
        border: solid 0.1em black;
        color: white;
        background: none;
    }
    
</style>

<h2>Benutzer anlegen</h2>

<form action="pages/inc/create_user.inc.php" method="post">

    <p>Username: <input name="username" type="text" required></p>

    <p>Passwort: <input name="password" type="password" required></p>

    <p>Vorname: <input name="firstName" type="text" required></p>

    <p>Nachname: <input name="LastName" type="text" required></p>

    <p>E-Mail: <input name="email" type="text" required></p>

    <p><input type="submit" name="submit" value="Speichern" class="save_button"></p>

</form>