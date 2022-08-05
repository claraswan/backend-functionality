<!-- Database handler- this file handles connecting to the database -->

<?php

    $serverName = 'localhost';
    $dBUserName = 'root';
    $dBPassword = '';
    $dBName = 'ohAufgaben';

    // create connection
    $conn = mysqli_connect($serverName,$dBUserName, $dBPassword, $dBName);

    // check connection
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

?>