<!-- 2.4: Die vorhandenen Text-Dateien vom Kontaktformular auflisten -->

<?php

// Create an array called $files from the files in the /daten/ directory
$dir    = __DIR__ . '/daten/';
$files = scandir($dir);

?>

<!-- List each of the files from that array in an html list -->
<!-- You should be able to click on each of the file names, bringing you to that page under detail.php -->
<ul class="daten"> 

    <?php
    foreach ($files as $file) {
        echo ('<li>

        <a href="detail.php?file=' . $file . '">' . $file . '</a>
        
        </li>');
    }
    ?>

</ul>

<style>

    li {
        list-style-type: none;
    }

</style>
