<?php

        // 3.3: Es sollen nun nicht mehr die Daten des Formulars (^^) nach dem Absenden angezeigt werden sondern eine Dankeseite 
        echo "Vielen Dank für Ihre Nachricht.";
     
        // 2.3: Speicher die Formulardaten in einer Text-Datei

        $file = __DIR__ . '/admin/pages/daten/' . time() . '_formulardaten.txt';

        // output POST array data into $data variable

        $data = 'Vorname: ' . $_POST['vorname'] . chr(10) .
                'Nachname: ' . $_POST['nachname'] . chr(10) .
                'E-Mail: ' . $_POST['email'] . chr(10) .
                'Bewertung: ' . $_POST['bewertung'] . chr(10) .
                'Nachricht: ' . $_POST['nachricht'];

        file_put_contents($file, $data);

?>