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

                <p><input name="username" type="text" placeholder="Username" required></p>

                <p><input name="password" type="password" placeholder="Passwort" required></p>

                <p><input type="submit" name="login" value="Login"></p>

        </form>

    </div>

</div>

<?php

    // 3.7: Logik für das Loginformular

    if (isset($_POST['username']) && isset($_POST['password'])) { // check for presence of both

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if ($username == 'admin' && $password == 'IamLegend2o19'){
            include ('session.php');
        } else if ($username == 'rashid' && $password == 'R45h1d') {
            include ('session.php');
        } else if ($username == 'stefan' && $password == 'St3f4n') {
            include ('session.php');
        } else if ($username == 'sebastian' && $password == 's3b45st1an') {
            include ('session.php');
        } else {
            $error = 'Login oder Passwort inkorrekt';
            echo $error;
        }

    }

?>