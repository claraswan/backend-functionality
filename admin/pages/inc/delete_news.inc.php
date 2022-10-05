<?php

    include('session-tracker.inc.php');

    // 6.5: Benutzer können gelöscht werden

    require_once 'dbh.inc.php';
    $id = $_POST['delete'];

    // 6.6: Soft delete
    
    $sql = "UPDATE news SET deletedAt = CURRENT_TIMESTAMP WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
       
        header('location: __DIR__ . ../../index.php?page=news_auflistung');

    } else {

        echo "Fehler beim Löschen: " . mysqli_error($conn);

    }

    mysqli_close($conn);



?>