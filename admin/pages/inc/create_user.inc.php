<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['LastName'];
    $email = $_POST['email'];

    require_once 'dbh.inc.php';

    $sql = "INSERT INTO users (usersUsername, usersPassword, usersFirstName, usersLastName, usersEmail) VALUES ('$username', '$password', '$firstName', '$lastName', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo 'Neuer User geaddet';
        header('location: ../../index.php?page=user_admin');
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }

    mysqli_close($conn);

?>