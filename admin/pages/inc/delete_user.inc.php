<?php

    include('inc/session-tracker.inc.php');

    // 6.5: Benutzer können gelöscht werden
    
    require_once 'dbh.inc.php';
    $id = $_POST['delete'];

    // 6.6: Soft delete
    
    $sql = "UPDATE users SET deletedAt = CURRENT_TIMESTAMP WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
       
        header('location: __DIR__ . ../../index.php?page=user_admin');

    } else {

        echo "Fehler beim Löschen: " . mysqli_error($conn);

    }

    mysqli_close($conn);

?>