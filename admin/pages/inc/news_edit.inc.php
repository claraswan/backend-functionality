<?php

    include('session-tracker.inc.php');

    require_once 'dbh.inc.php';

    $id = $_POST['edit'];
    $ueberschrift = $_POST['ueberschrift'];
    $datum = $_POST['datum'];
    $text = $_POST['text'];

    $sql = "UPDATE news SET ueberschrift='$ueberschrift', datum='$datum', text='$text' WHERE id=$id";
  
    if (mysqli_query($conn, $sql)) {

        header('location: __DIR__ . ../../index.php?page=news_auflistung');
        
    } else {
        
        echo "Error updating record: " . mysqli_error($conn);
        
    }
              
    mysqli_close($conn);

?>
