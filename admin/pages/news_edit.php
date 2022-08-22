<?php

    include('inc/session-tracker.inc.php'); 

    $id = $_GET['id'];

    require_once 'inc/dbh.inc.php';

    $sql = "SELECT ueberschrift, id, datum, text FROM news WHERE id=$id";
   
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        $ueberschrift = $row["ueberschrift"];
        $datum = $row["datum"];
        $text = $row["text"];

    }

?>

<h2>Der News-Macher</h2>

<form action="index.php?page=news_edit.inc&id=<?php echo $id ?>" method="post">
    
    <p>Überschrift: <input name="ueberschrift" type="text" value="<?php echo $ueberschrift ?>" required></p>

    <p>Datum: <input name="datum" type="date" value="<?php echo $datum ?>" required></p>

    <p>Text: <textarea rows="5" cols="24" name="text" required><?php echo $text ?></textarea></p>

    <p><input type="submit" name="submit" value="Fertig"></p>

</form>