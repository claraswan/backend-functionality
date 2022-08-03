<!-- 2.4: Die vorhandenen Text-Dateien vom Kontaktformular auflisten -->

<?php

// Create an array called $files from the files in the /daten/ directory
$dir    = __DIR__ . '/daten/';
$files = scandir($dir);

?>

<!-- List each of the files from that array in an html list -->
<ul> 

    <?php
    // 2.5: Der Klick auf einer der Dateien führt auf eine neue Seite welche den Dateinamen als Query-Parameter übergeben wird
    foreach ($files as $file) {
        echo ('<li>

        <a href="index.php?page=detail&file=' . $file . '">' . $file . '</a>
        
        </li>');
    }
    ?>

</ul>

<style>

    li {
        list-style-type: none;
    }

</style>
