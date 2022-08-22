<?php

include('inc/session-tracker.inc.php');
    
?>

<!-- 6.3: Formular zum Anlegen eines Benutzers -->

<h2>Benutzer anlegen</h2>

<form action="pages/inc/create_user.inc.php" method="post">

    <p>Username: <input name="username" type="text" required></p>

    <p>Passwort: <input name="password" type="password" required></p>

    <p>Vorname: <input name="firstName" type="text" required></p>

    <p>Nachname: <input name="LastName" type="text" required></p>

    <p>E-Mail: <input name="email" type="text" required></p>

    <p><input type="submit" name="submit" value="Speichern" id="save" class="button"></p>

</form>