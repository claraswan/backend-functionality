<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }
    
?>

<h2>Benutzer</h2>
<!-- List users in a table -->
<?php

    require_once 'dbh.inc.php';
    $sql = "SELECT usersFirstName, usersLastName FROM users";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {

        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

          echo "Name: " . $row["usersFirstName"]. $row["usersLastName"]. "<br>";
          
        }

      } 
      else {

        echo "Keine Benutzer";

      }
      
    mysqli_close($conn);

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

<a class="button" href="index.php?page=create_user">Create New User</a>