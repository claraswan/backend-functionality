
<!-- What to do: Have a session started that saves the session variable and allows for us to access 
it on every single page inside our website 

So after session start on every admin page, the page will remember our login details -->


<?php

    function logUserIn($user, $pass) {
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["password"] = $pass;
        header('location: index.php?page=overview');
    }
    
    logUserIn($username, $password);

    // function isLoggedIn() {
    //     if (empty($_SESSION)) {
    //         header('location: index.php?page=login');
    //     } else {
    //         header('location: index.php');
    //     }
    // }
?>