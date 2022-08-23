<?php

if (isset($_GET['file'])) {

    $file    = './pages/daten/' . $_GET['file'] ;

    if (file_exists($file)) {

        $result = file($file);
        $contents = implode("\n", $result);
        echo "<pre>" . $contents . "</pre>";

    } else {
        include('../inc/err404.inc.php');
    }
}

?>