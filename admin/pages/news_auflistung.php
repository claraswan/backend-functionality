<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        
        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

    // Create an array called $files from the files in the /daten/ directory
    $dir    = __DIR__. '/news_eintraege/';
    $files = scandir($dir);

?>

<style>

    .special {
        text-decoration: underline;
    }

    li {
        list-style-type: none;
        text-align: left;
    }
    .button:hover {
        border: solid 0.1em black;
        color: white;
        background: none;
    }
    .button {
        background: #2b2b2f;
        border: none;
        padding: 12px 24px;
        margin-top: 42px;
        font-size: 14px;
    }
    .delete {
        font-size: 10px;
        border: solid 0.1px white;
        margin-right: 14px;
    }

</style>

<h2>News-Einträge</h2>
<ul> 

    <!-- List each of the files from that array in a list -->
    <?php

        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo ('<li>

                <a class="delete" href="index.php?page=news_detail&file=' . $file . '">delete</a>
                <a href="index.php?page=news_detail&file=' . $file . '">' . $file . '</a>
                
                </li>');
            }
            
        }
    
    ?>

</ul>

<a class="button" href="index.php?page=news_maske">Neuer Eintrag</a>