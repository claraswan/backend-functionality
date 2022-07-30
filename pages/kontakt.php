<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Kontakt</title>
</head>

<body>

    <div class="header">
        <div class="logo"><img src="assets/logo.jpg" alt="orange hive logo"></div>
        <div class="nav"><nav>
            <a href="/kontakt.php">Kontakt</a> |
            <a href="/page1.php">Page 1</a> |
            <a href="/page2.php">Page 2</a> 
        </nav> 
        </div>
    </div>

    <div class="content">

        <h2>Kontakt</h2>

        <!-- 2.1: Erstelle einen Kontaktformular -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

            <p>Vorname: <input name="vorname" type="text"></p>

            <p>Nachname: <input name="nachname" type="text"></p>

            <p>E-Mail: <input name="email" type="text"></p>

            <!-- 2.1: Bewertung soll über eine Schleife erstellt werden -->
            <select>
            <?php

                for($option=0; $option <= 5; $option++){
                    echo "<option>" . $option . "</option>";
                }

            ?>
            </select>

            <p><textarea rows = "5" cols = "20" name = "Nachricht">Geben Sie hier ihre Nachricht ein</textarea></p>

            <p><input type='submit' name='submit' value='Submit'></p>
1
        </form>

        <?php

        // 2.2: Daten mit Definitionsliste auf der Seite ausgeben

        if ($_SERVER["REQUEST_METHOD"] == "POST") { //if form has been submitted
                
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
        }

        // 2.3: Speicher die Formulardaten in einer Text-Datei

        // jeded übermittelte Formular Datei soll UNIX-Timestamp haben
        // und soll im eignenem Verzeichnis gespeichert sein
        $file = "daten/formulardaten" . $_SERVER['REQUEST_TIME'] . ".txt";
        // output POST array data into $data variable
        $data .= print_r($_POST);
        // put that data into the formulardaten.txt file in the daten directory
        file_put_contents($file, $data);

        ?>


    </div>

    <div class="footer">
        <div class="link1">
            <a href="#">Home</a>
        </div>
        <div class="author"><h5> Aufgaben Von Clara Swanson </h5></div>
    </div>

</body>

</html>