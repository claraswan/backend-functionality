<?php

    session_start();

    if(!isset($_SESSION['username'])) {

        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

    // 6.4: eine Editiermaske für die Benutzerdaten

    require_once 'dbh.inc.php';

    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['LastName'];
    $email = $_POST['email'];

    // assign each POST info to variables
    $sql = "UPDATE users SET usersUsername='$username', usersPassword='$password', usersFirstName='$firstName', usersLastName='$lastName', usersEmail='$email' WHERE usersId=$id";
  
    if (mysqli_query($conn, $sql)) {

        header('location: __DIR__ . ../../index.php?page=user_admin');
        
    } else {
        
        echo "Error updating record: " . mysqli_error($conn);
        
    }
              
    mysqli_close($conn);

?>