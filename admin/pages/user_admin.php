<?php

    include('inc/session-tracker.inc.php');
    
?>

<h2>Users</h2>

<!-- 6.2: Erstelle eine Benutzerverwaltung im Admin-Bereich -->

<?php

    require_once 'inc/dbh.inc.php';
    $sql = "SELECT userName, id, firstName, lastName FROM users WHERE deletedAt is NULL";
   
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    
?>
        <table cellspacing=8>

        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Options</th>
        </tr>

        <?php
        // output data of each row (=each person)
        while ($row = mysqli_fetch_assoc($result)) {

            $id = $row["id"];
            $username = $row["userName"];
            $firstName = $row["firstName"];
            $lastName = $row["lastName"]

        ?>

            <tr>

                <td><?=$id?></td>
                <td><?=$username?></td>
                <td><?=$firstName?></td>
                <td><?=$lastName?></td>
                <td> 

                    <form class="inline" action="index.php?page=edit_user" method="post">
                        <button name="edit" value="<?=$id?>" class="edit_button">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                <line x1="16" y1="5" x2="19" y2="8" />
                                </svg>
                            </i>
                        </button>
                    </form>

                    <form class="inline" action="index.php?page=delete_user.inc" method="post">
                        <button name="delete" value="<?=$id?>" class="delete_button">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="4" y1="7" x2="20" y2="7" />
                                <line x1="10" y1="11" x2="10" y2="17" />
                                <line x1="14" y1="11" x2="14" y2="17" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </i>
                        </button>
                    </form>
                    
                </td>
            
            </tr>

    <?php
        }

        echo '</table>';

    } else {
        echo "No Users";
    }
      
    mysqli_close($conn);

    ?>


<!-- 6.3: „Benutzer anlegen“ Button -->
<a id="benutzer_anlegen" class="button" href="index.php?page=create_user"><div class="text">Create new user</div></a>