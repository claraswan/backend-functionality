<?php

    // 4.3: Implementiere im Navigationsbereich auf jeder Seite aus dem Admin-Bereich einen Logout-Link, welcher nach dem Logout wieder auf die Login-Seite führt
    
    session_start();
    session_destroy();
    header('location: index.php?page=login');

?>