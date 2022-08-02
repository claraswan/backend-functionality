<!DOCTYPE html>
<html lang="en">
    
<head>

    <?php include("inc/head-info.php");?>

</head>

<body>

    <?php include("inc/header.php");?>

    <div class="content">
        <!-- 2.2: Daten mit Definitionsliste auf der Seite ausgeben -->
        <?php
            echo ('<dl>

            <dt>Vorname</dt> 
            <dd>' . $_POST['vorname'] . '</dd>
            <dt>Nachname</dt>
            <dd>' . $_POST['nachname'] . '</dd>
            <dt>E-Mail</dt> 
            <dd>' . $_POST['email'] . '</dd>
            <dt>Bewertung</dt> 
            <dd>' . $_POST['bewertung'] . '</dd> 
            <dt>Nachricht</dt>
            <dd>' . $_POST['nachricht'] . '</dd>

            </dl>');
     
            // 2.3: Speicher die Formulardaten in einer Text-Datei

            // jeded übermittelte Formular Datei soll UNIX-Timestamp haben
            // und soll im eignenem Verzeichnis gespeichert sein
            $file = __DIR__ . '/daten/' . time() . '_formulardaten.txt';

            // output POST array data into $data variable
            // can't get newline to work though
            $data = 'Vorname: ' . $_POST['vorname'] . chr(10) .
                    'Nachname: ' . $_POST['nachname'] . chr(10) .
                    'E-Mail: ' . $_POST['email'] . chr(10) .
                    'Bewertung: ' . $_POST['bewertung'] . chr(10) .
                    'Nachricht: ' . $_POST['nachricht'];

            // put that data into the formulardaten.txt file in the daten directory
            file_put_contents($file, $data);
        ?>
    
    </div>

    <?php include("inc/footer.php");?>

</body>

</html>