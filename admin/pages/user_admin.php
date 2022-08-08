<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }
    
?>

<h2>Benutzer</h2>

<!-- 6.2: Erstelle eine Benutzerverwaltung im Admin-Bereich -->

<?php

    require_once 'inc/dbh.inc.php';
    $sql = "SELECT usersUsername, usersId, usersFirstName, usersLastName FROM users WHERE deleted_at is NULL";
   
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo ('<table cellspacing=8>

        <tr>
            <th>Optionen</th>
            <th>ID</th>
            <th>Username</th>
            <th>Vorname</th>
            <th>Nachname</th>
        </tr>');

        // output data of each row (=each person)
        while ($row = mysqli_fetch_assoc($result)) {

            $idResult = $row["usersId"];
            $userResult = $row["usersUsername"];

            echo ('

            <tr>
            
                <td> <a href="index.php?page=delete_user.inc&user=' . $userResult . '">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="4" y1="7" x2="20" y2="7" />
                    <line x1="10" y1="11" x2="10" y2="17" />
                    <line x1="14" y1="11" x2="14" y2="17" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                    </svg>
                    </a> 
                     <a class="edit" href="index.php?page=edit_user&id=' . $idResult . '">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                    <line x1="16" y1="5" x2="19" y2="8" />
                    </svg>
                    </a> </td>

                <td>' . $row["usersId"] . '</td>
                <td>' . $row["usersUsername"] . '</td>
                <td>' . $row["usersFirstName"] . '</td>
                <td>' . $row["usersLastName"] . '</td>
                

                </tr>'

                );

        }

        echo '</table>';

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
        font-size: 8px;
        border: none;
        padding: 10px 16px;
        font-size: 18px;
        width: 140px;
        margin-top: 60px;
        text-align: center;
    }
    table td{
        background: #2b2b2f;
        font-size: 14px;
        padding: 4px;
    }
    .text {
        font-size: 14px;
        font-style: normal;
    }
    a {
        margin: 18px 6px;
    }

  
</style>

<!-- 6.3: „Benutzer anlegen“ Button -->
<a class="button" href="index.php?page=create_user"><div class="text">Benutzer anlegen</div></a>