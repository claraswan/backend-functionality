<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }
?>

<style>

    .button:hover {
        border: solid 0.1em black;
        color: white;
        background: none;
    }
    .button {
        background: #2b2b2f;
        border: none;
        padding: 20px 34px;
        font-size: 18px;
        width: 140px;
        margin-top: 20px;
        text-align: center;
    }
    
</style>

<a class="button" href="index.php?page=contactform">Kontaktformular</a>

<a class="button" href="index.php?page=news_maske">News Maske</a>

<a class="button" href="index.php?page=news_auflistung">News Auflistung</a>