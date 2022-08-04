<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        
        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

?>

<h2>Der News-Macher</h2>

<form action="index.php?page=news_danke" method="post">

    <p>Überschrift: <input name="ueberschrift" type="text" required></p>

    <p>Datum: <input name="datum" type="date" required></p>

    <p>Text: <textarea rows="5" cols="24" name="text" required></textarea></p>

    <p><input type="submit" name="submit" value="Fertig"></p>

</form>

