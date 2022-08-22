<!-- 5.4: Im Frontend sollen nun die Inhalte der einzelnen News ausgegeben werden  -->
<?php

    require_once 'admin/pages/inc/dbh.inc.php';
    $sql = "SELECT ueberschrift, id, datum, text FROM news WHERE deletedAt is NULL";
   
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

?>

<h2>News Page</h2>

<ul> <?php
        
        while ($row = mysqli_fetch_assoc($result)) {

            $ueberschrift = $row["ueberschrift"];
            $datum = $row["datum"];
            $text = $row["text"];
            $id = $row["id"];

?>

            <li class="news_list">
                <a href="index.php?page=news_detail&id=<?=$id?>"><?=$ueberschrift?></a>
            </li>

        <?php
        }  

    } else {
        echo "Keine News";
    }
      
    mysqli_close($conn);

    ?>
    
</ul>