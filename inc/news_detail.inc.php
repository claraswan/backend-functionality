<?php

if (isset($_GET['id'])) { // 5.4: Im Frontend sollen nun die Inhalte der einzelnen News ausgegeben werden

    require_once 'admin/pages/inc/dbh.inc.php';

    $id = $_GET['id'];

    $sql = "SELECT ueberschrift, datum, text FROM news WHERE id=$id";
   
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $ueberschrift = $row['ueberschrift'];
            $datum = $row['datum'];
            $text = $row['text'];

?>

        <dl>

            <dt>Überschrift</dt> 
            <dd><?= $ueberschrift?></dd>
            <dt>Datum</dt>
            <dd><?= $datum?></dd>
            <dt>Betrag</dt> 
            <dd><?= $text?></dd>

        </dl>

        
<?php
        }

    } else {
        include('./err404.inc.php');
    }

} else {
    echo ('no id given');
}
?>