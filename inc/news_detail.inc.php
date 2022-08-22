<?php

if (isset($_GET['file'])) { // 5.4: Im Frontend sollen nun die Inhalte der einzelnen News ausgegeben werden

    $file = 'admin/pages/news_eintraege/' . $_GET['file'];

    if (file_exists($file)) {

        $jsonFile = file_get_contents($file);

        $contents = json_decode($jsonFile, true);
    ?>

        <dl>

            <dt style="margin:10px;">Überschrift</dt> 
            <dd><?= $contents['ueberschrift'] ?></dd>
            <dt style="margin:10px;">Datum</dt>
            <dd><?= $contents['datum'] ?></dd>
            <dt style="margin:10px;">Betrag</dt> 
            <dd><?= $contents['text'] ?></dd>

        </dl>

        
    <?php
    } else {
        include('./err404.inc.php');
    }

}
    ?>