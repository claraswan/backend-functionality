<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

    // 6.5: Benutzer können gelöscht werden
    
    require_once 'dbh.inc.php';
    $user = $_GET['user'];

    // 6.6: Soft delete
    
    $sql = "UPDATE users SET deletedAt = CURRENT_TIMESTAMP WHERE userName='$user'";

    if (mysqli_query($conn, $sql)) {
       
        header('location: __DIR__ . ../../index.php?page=user_admin');

    } else {

        echo "Fehler beim Löschen: " . mysqli_error($conn);

    }

    mysqli_close($conn);

?>