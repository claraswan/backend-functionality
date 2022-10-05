<?php

    include('inc/session-tracker.inc.php');
    // Create an array called $files from the files in the /daten/ directory
    $dir    = __DIR__. '/daten/';
    $files = scandir($dir);

?>

<h2>Formular Daten</h2>
<ul> 

    <!-- List each of the files from that array in an html list -->
    <?php

        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo ('<li>

                <a href="index.php?page=detail&file=' . $file . '">' . $file . '</a>
                
                </li>');
            }
        }
    
    ?>

</ul>