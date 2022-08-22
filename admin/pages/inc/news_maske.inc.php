<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        
        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

    echo '<p>Wow, was für einen Meisterwerk!</p> <br>';
    echo '<br> <p>Schau dir die <a style="text-decoration: underline" href="index.php?page=news_auflistung">' . 'anderen Beiträge</a> an</p>';

    // if (isset($_POST['submit'])) {

    //     $news = array(
    //         "ueberschrift" => $_POST['ueberschrift'],
    //         "datum" => $_POST['datum'],
    //         "text" => $_POST['text']
    //     );

    //     $json_news = json_encode($news);
    //     $file = 'C:\xampp\htdocs\oh-aufgaben\admin\pages/news_eintraege/' . $_POST['ueberschrift'];

    //     file_put_contents($file, $json_news);

    // }


    ///


    $ueberschrift = $_POST['ueberschrift'];
    $datum = $_POST['datum'];
    $text = $_POST['text'];

    require_once 'dbh.inc.php';

    $sql = "INSERT INTO news (ueberschrift, datum, text) VALUES ('$ueberschrift', '$datum', '$text')";

    if (!(mysqli_query($conn, $sql))) {

        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);

    }
    mysqli_close($conn);

?>