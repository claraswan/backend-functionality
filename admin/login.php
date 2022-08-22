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

        $postUsername = $_POST['username'];
        $postPassword = $_POST['password'];

        require_once 'pages/inc/dbh.inc.php';

        $sql = "SELECT password FROM users WHERE deletedAt is NULL and userName = '$postUsername'";
    
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);

            $password = $row["password"];

            if ($postPassword === $password) {

                include ('session.php');

            } else {

                $error = 'Falsches Passwort.';
                echo $error;

            }

        } else {

            $error = 'Username existiert nicht.';
            echo $error;

        }
        
     
    }

?>