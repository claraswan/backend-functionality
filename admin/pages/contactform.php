<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        echo 'Bitte erst <a style="text-decoration: underline" href="index.php?page=login">' . 'einloggen!</a>';
        die;
    }
    
?>

<?php

// Create an array called $files from the files in the /daten/ directory
$dir    = '../daten/';
$files = scandir($dir);

?>

<!-- List each of the files from that array in an html list -->
<ul> 

    <?php

    foreach ($files as $file) {
        echo ('<li>

        <a href="index.php?page=detail&file=' . $file . '">' . $file . '</a>
        
        </li>');
    }
    
    ?>

</ul>


<style>

    .special {
        text-decoration: underline;
    }

    li {
        list-style-type: none;
    }

</style>