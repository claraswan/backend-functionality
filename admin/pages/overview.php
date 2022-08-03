<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;
    }
?>
<style>
    .button {
        background-color: black;
        border: solid 0.01em white;
        color: white;
        padding: 20px 34px;
        text-align: center;
        font-size: 20px;
    }
</style>

<a class="button" href="index.php?page=contactform">Kontaktformular</a>