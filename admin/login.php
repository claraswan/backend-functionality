<!-- 3.6: Erstelle eine Datei login.php für den Administrationsbereich -->

<style> 

.form {
    display: flex;
    margin-right: auto;
    align-items: center;
    justify-content: center;
}

.whole_form {
    background: #2b2b2f;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 8px 20px;
}

 h2 {
    display: flex;
    align-items: center;
    justify-content: center;
 }

</style>

<div class="whole_form">
    <h2>Login</h2>

    <div class="form">
        <form action="" method="post">

                <p>Username: <input name="user" type="text" required></p>

                <p>Passwort: <input name="passwort" type="password" required></p>

                <p><input type="submit" name="login" value="Login"></p>

        </form>
    </div>
</div>

<?php

    // 3.7: Logik für das Loginformular

    if (isset($_POST['user']) && isset($_POST['passwort'])) { // check for presence of both

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