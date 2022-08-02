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

            // jeded übermittelte Formular Datei soll UNIX-Timestamp haben:
            // und soll im eignenem Verzeichnis gespeichert sein
            // echo __DIR__ . '/daten/' . time() . '_formulardaten.txt';
            $file = __DIR__ . '/daten/' . time() . '_formulardaten.txt';
            // output POST array data into $data variable
            $data = 'Vorname: ' . $_POST['vorname'] . '\n' .
                    'Nachname: ' . $_POST['nachname'] . '\n' .
                    'E-Mail: ' . $_POST['email'] . '\n' .
                    'Bewertung: ' . $_POST['bewertung'] . '\n' .
                    'Nachricht: ' . $_POST['nachricht'];
            // put that data into the formulardaten.txt file in the daten directory
            file_put_contents($file, $data);
        ?>
    
    </div>

    <?php include("inc/footer.php");?>

</body>

</html>