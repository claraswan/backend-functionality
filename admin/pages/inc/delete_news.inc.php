<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

    // 6.5: Benutzer können gelöscht werden
    
    require_once 'dbh.inc.php';
    $ueberschrift = $_GET['file'];

    // 6.6: Soft delete
    
    $sql = "UPDATE news SET deletedAt = CURRENT_TIMESTAMP WHERE ueberschrift='$ueberschrift'";

    if (mysqli_query($conn, $sql)) {
       
        header('location: __DIR__ . ../../index.php?page=news_auflistung');

    } else {

        echo "Fehler beim Löschen: " . mysqli_error($conn);

    }

    mysqli_close($conn);

?>