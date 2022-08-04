<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        
        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

    echo 'Was für einen Meisterwerk! <br>';
    echo '<br> Schau dir die <a style="text-decoration: underline" href="index.php?page=news_auflistung">' . 'anderen Beiträge</a> an';


    if (isset($_POST['submit'])) {

        $news = array(
            "ueberschrift" => $_POST['ueberschrift'],
            "datum" => $_POST['datum'],
            "text" => $_POST['text']
        );

        $json_news = json_encode($news);
        $file = __DIR__ . '/news_eintraege/' . $_POST['ueberschrift'] . '.txt';

        file_put_contents($file, $json_news);

    }

?>