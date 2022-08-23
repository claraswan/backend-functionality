<?php

    include('inc/session-tracker.inc.php');

    $id = $_GET['id'];

    require_once 'inc/dbh.inc.php';

    $sql = "SELECT userName, password, id, firstName, lastName, email FROM users WHERE id=$id";
   
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        $username = $row["userName"];
        $passwort = $row["password"];
        $vorname = $row["firstName"];
        $nachname = $row["lastName"];
        $email = $row["email"];
        
    }

?>

<!-- 6.4: eine Editiermaske für die Benutzerdaten -->

<h2>Benutzer editieren</h2>

<form action="index.php?page=edit_user.inc&id=<?php echo $id ?>" method="post">

    <p>Username: <input name="username" type="text" value="<?php echo $username ?>" required></p>

    <p>Passwort: <input name="password" type="text" value="<?php echo $passwort ?>" required></p>

    <p>Vorname: <input name="firstName" type="text" value="<?php echo $vorname ?>" required></p>

    <p>Nachname: <input name="LastName" type="text" value="<?php echo $nachname ?>" required></p>

    <p>E-Mail: <input name="email" type="text" value="<?php echo $email ?>" required></p>

    <p><input type="submit" name="submit" value="Speichern" class="save_button"></p>

</form>