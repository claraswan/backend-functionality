<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("inc/head-info.php");?>

</head>

<body>

        <h2>Kontakt</h2>

        <!-- 2.1: Erstelle einen Kontaktformular -->
        <form action="pages/daten.php" method="post">

            <p>Vorname: <input name="vorname" type="text"></p>

            <p>Nachname: <input name="nachname" type="text"></p>

            <p>E-Mail: <input name="email" type="text"></p>

            <!-- 2.1: Bewertung soll über eine Schleife erstellt werden -->
            <p>Bewertung: <select name="bewertung">
            <?php

                for($option=0; $option <= 5; $option++){
                    echo "<option>" . $option . "</option>";
                }

            ?>
            </select></p>

            <p>Nachricht: <textarea rows = "5" cols = "24" name = "nachricht"></textarea></p>

            <p><input type='submit' name='submit' value='Submit'></p>

        </form>

        <?php

        // 2.2: Daten mit Definitionsliste auf der Seite ausgeben
        
        // if (isset($_POST["submit"])) { //if form has been submitted
                
        //     echo ('<dl>

        //         <dt>Vorname</dt> 
        //         <dd>' . $_POST['vorname'] . '</dd>
        //         <dt>Nachname</dt>
        //         <dd>' . $_POST['nachname'] . '</dd>
        //         <dt>E-Mail</dt> 
        //         <dd>' . $_POST['email'] . '</dd>
        //         <dt>Bewertung</dt> 
        //         <dd>' . $_POST['bewertung'] . '</dd> 
        //         <dt>Nachricht</dt>
        //         <dd>' . $_POST['nachricht'] . '</dd>

        //     </dl>');
        // }

        // 2.3: Speicher die Formulardaten in einer Text-Datei

        // jeded übermittelte Formular Datei soll UNIX-Timestamp haben
        // und soll im eignenem Verzeichnis gespeichert sein
        $file = "daten/formulardaten" . $_SERVER['REQUEST_TIME'] . ".txt";
        // output POST array data into $data variable
        $data .= print_r($_POST);
        // put that data into the formulardaten.txt file in the daten directory
        file_put_contents($file, $data);

        ?>

</body>

</html>