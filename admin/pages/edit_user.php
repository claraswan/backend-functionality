<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        
        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

    $id = $_SESSION['id'];
?>

<!-- 6.4: eine Editiermaske für die Benutzerdaten -->

<h2>Benutzer editieren</h2>

<form action="index.php?page=edit_user.inc&id=<?php echo $id ?>" method="post">

    <p>Username: <input name="username" type="text" required></p>

    <p>Passwort: <input name="password" type="password" required></p>

    <p>Vorname: <input name="firstName" type="text" required></p>

    <p>Nachname: <input name="LastName" type="text" required></p>

    <p>E-Mail: <input name="email" type="text" required></p>

    <p><input type="submit" name="submit" value="Speichern" class="save_button"></p>

</form>