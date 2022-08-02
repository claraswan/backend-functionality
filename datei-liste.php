<!-- 2.4: Die vorhandenen Text-Dateien vom Kontaktformular auflisten -->

<?php

// Create an array called $files from the files in the /daten/ directory
$dir    = __DIR__ . '/daten/';
$files = scandir($dir);

?>

<!-- List each of the files from that array in an html list -->
<ul class="daten"> 

    <?php
    foreach ($files as $file) {
        echo '<li>'. $file . '</li>';
    }
    ?>

</ul>

<style>

    li {
        list-style-type: none;
    }

</style>
