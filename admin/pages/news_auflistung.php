<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        
        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;

    }

    $dir    = __DIR__. '/news_eintraege/';
    $files = scandir($dir);

?>

<!-- 5.2: Auflistung der vorhandenen News-Einträge, mit Button zum Erstellen einer neuen News -->
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

    a {
        margin: 18px 4px;
    }

    .edit {
        margin-right: 16px;
    }

</style>


<!-- 5.2: Auflistung der vorhandenen News-Einträge mit einen Button zum Erstellen einer neuen News -->

<h2>News-Einträge</h2>
<ul style="padding-left: 0px;"> 

    <?php

// 5.3 und 5.5: Funktion die News zu löschen und zu editen

        foreach ($files as $file) {

            if ($file !== '.' && $file !== '..') {

                echo ('<li>

                <a href="index.php?page=delete&file=' . $file . '">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="4" y1="7" x2="20" y2="7" />
                    <line x1="10" y1="11" x2="10" y2="17" />
                    <line x1="14" y1="11" x2="14" y2="17" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                    </svg>
                </a>

                <a class="edit" href="index.php?page=news_edit&file=' . $file . '">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                    <line x1="16" y1="5" x2="19" y2="8" />
                    </svg>
                </a>'

                . $file .
                
                '</li>');

            }
            
        }
    
    ?>

</ul>

<a class="button" href="index.php?page=news_maske">Neuer Eintrag</a>