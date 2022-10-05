<?php

    // 4.2: Implementiere Session-Handling für die Adminseiten in einer eigenen Script-Datei
    function logUserIn($user, $pass) {
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["password"] = $pass;
        header('location: index.php?page=overview');
    }
    
    logUserIn($postUsername, $postPassword);

?>