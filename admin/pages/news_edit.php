<?php

    include('inc/session-tracker.inc.php'); 

?>

<h2>Der News-Macher</h2>

<form action="index.php?page=news_edit.inc" method="post">

    <?php

        $file = $_GET['file'];

        $jsonContents = file_get_contents(__DIR__ . '/news_eintraege/' . $file);
        $decodedContents = json_decode($jsonContents, true);

        $ueberschrift = $decodedContents['ueberschrift'];
        $datum = $decodedContents['datum'];
        $text = $decodedContents['text'];

    ?>

    <p>Überschrift: <input name="ueberschrift" type="text" value="<?php echo $ueberschrift ?>" required></p>

    <p>Datum: <input name="datum" type="date" value="<?php echo $datum ?>" required></p>

    <p>Text: <textarea rows="5" cols="24" name="text" required><?php echo $text ?></textarea></p>

    <p><input type="submit" name="submit" value="Fertig"></p>

</form>