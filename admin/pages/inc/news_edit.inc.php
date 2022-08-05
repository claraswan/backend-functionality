<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        
        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }


    if (isset($_POST['submit'])) {

        $news = array(
            "ueberschrift" => $_POST['ueberschrift'],
            "datum" => $_POST['datum'],
            "text" => $_POST['text']
        );

        $json_news = json_encode($news);
        $file = __DIR__ . '/news_eintraege/' . $_POST['ueberschrift'];

        file_put_contents($file, $json_news);

        // The key difference between news_danke_edit and news_danke:
        unlink($_SESSION['old_file']);
        header('location: index.php?page=news_auflistung');
    }

?>