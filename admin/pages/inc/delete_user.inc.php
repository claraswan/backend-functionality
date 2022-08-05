<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }
    
    require_once 'dbh.inc.php';
    $user = $_GET['user'];

    $sql = "DELETE FROM users WHERE usersUsername='$user'";

    if (mysqli_query($conn, $sql)) {
       
        header('location: __DIR__ . ../../index.php?page=user_admin');

    } else {

        echo "Fehler beim Löschen: " . mysqli_error($conn);

    }

    mysqli_close($conn);

?>