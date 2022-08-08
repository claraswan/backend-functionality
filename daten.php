<!-- 2.2: Daten mit Definitionsliste auf der Seite ausgeben -->

<?php

        // echo ('<dl>

        // <dt>Vorname</dt> 
        // <dd>' . $_POST['vorname'] . '</dd>
        // <dt>Nachname</dt>
        // <dd>' . $_POST['nachname'] . '</dd>
        // <dt>E-Mail</dt> 
        // <dd>' . $_POST['email'] . '</dd>
        // <dt>Bewertung</dt> 
        // <dd>' . $_POST['bewertung'] . '</dd> 
        // <dt>Nachricht</dt>
        // <dd>' . $_POST['nachricht'] . '</dd>

        // </dl>');

        // 3.3: Es sollen nun nicht mehr die Daten des Formulars (^^) nach dem Absenden angezeigt werden sondern eine Dankeseite 

        echo "Vielen Dank für Ihre Nachricht.";
     
        // 2.3: Speicher die Formulardaten in einer Text-Datei

        // jeded übermittelte Formular Datei soll UNIX-Timestamp haben
        // und soll im eignenem Verzeichnis gespeichert sein

        $file = __DIR__ . '/admin/pages/daten/' . time() . '_formulardaten.txt';

        // output POST array data into $data variable

        $data = 'Vorname: ' . $_POST['vorname'] . chr(10) .
                'Nachname: ' . $_POST['nachname'] . chr(10) .
                'E-Mail: ' . $_POST['email'] . chr(10) .
                'Bewertung: ' . $_POST['bewertung'] . chr(10) .
                'Nachricht: ' . $_POST['nachricht'];

        file_put_contents($file, $data);

?>