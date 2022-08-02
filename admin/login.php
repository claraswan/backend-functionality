<!-- Erstelle eine Datei login.php für den Administrationsbereich -->

<h2>Login</h2>

<form action="" method="post">

        <p>Login: <input name="user" type="text" required></p>

        <p>Passwort: <input name="passwort" type="password" required></p>

        <p><input type="submit" name="login" value="Login"></p>

</form>

<?php

    // Logik für das Loginformular

    if(isset($_POST['user']) && isset($_POST['passwort'])){ // check for presence of both

        $username = $_POST['user'];
        $password = $_POST['passwort'];

        if ($username == 'admin' && $password == 'IamLegend2o19'){
            header('location: index.php?page=overview');
        } else if ($username == 'rashid' && $password == 'R45h1d') {
            header('location: index.php?page=overview');
        } else if ($username == 'stefan' && $password == 'St3f4n') {
            header('location: index.php?page=overview');
        } else if ($username == 'sebastian' && $password == 's3b45st1an') {
            header('location: index.php?page=overview');
        } else {
            $error = 'Login oder Passwort inkorrekt';
            echo $error;
        }

    }

?>