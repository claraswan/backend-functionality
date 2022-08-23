<?php

    include('session-tracker.inc.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['LastName'];
    $email = $_POST['email'];
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    require_once 'dbh.inc.php';

    $sql = "INSERT INTO users (userName, password, firstName, lastName, email) VALUES ('$username', '$hashedPwd', '$firstName', '$lastName', '$email')";

    if (mysqli_query($conn, $sql)) {

        header('location: ../../index.php?page=user_admin');

    } else {

        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
        
    }

    mysqli_close($conn);

?>